<?php
namespace Sahakavatar\Framework\Services;

use Sahakavatar\Cms\Services\GeneralService;
use Sahakavatar\Framework\Repository\VersionsRepository;
use Sahakavatar\Settings\Repository\AdminsettingRepository;

/**
 * Class ThemeService
 * @package Sahakavatar\Console\Services
 */
class VersionsService extends GeneralService
{

    /**
     * @var
     */
    private $current;
    private $versionsRepository;
    private $adminsettingRepository;
    private $mainJS = "js/main.js";
    /**
     * @var
     */
    private $result;

    public function __construct(VersionsRepository $versionsRepository,AdminsettingRepository $adminsettingRepository)
    {
        $this->versionsRepository = $versionsRepository;
        $this->adminsettingRepository = $adminsettingRepository;
    }

   public function makeVersion($request){
      $this->exstension = $request->file('file')->getClientOriginalExtension(); // getting image extension
      $oname = $request->file('file')->getClientOriginalName(); // getting image extension
      $fname = uniqid().'.'.$this->exstension;
      $request->file('file')->move(public_path($request->type.'/versions'), $fname);

      $this->versionsRepository->create([
          'name' => $request->get('name'),
          'type' => $request->get('type'),
          'path' => $request->type.'/versions/'.$fname,
          'content' => md5(public_path($request->type.'/versions/'.$fname))
      ]);
   }

    public function makeActive($id)
    {
        $this->versionsRepository->updateWhere($id,"!=",['active' => 0]);
        $this->versionsRepository->update($id,['active' => 1]);
    }

    public function generateJS($data)
    {
        if(count($data['assets'])){
            $js = "";
            foreach ($data['assets'] as $id => $val){
                $response = $this->versionsRepository->model()->where('id',$id)->where('type','js')->first();
                if($response){
                    $this->versionsRepository->updateWhere($id,'=',['is_generated' => $val]);
                    if($val && \File::exists(public_path($response->path))) {
                        $js .= \File::get(public_path($response->path));
                    }
                }
            }
            $this->MakeMainJS($js);
        }
    }

    public function MakeMainJS($data){
        \File::put(public_path($this->mainJS),$data);
    }
}