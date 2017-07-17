$(function(){
  var info = $('.infor');
    var columns = 12;
    var pasentes = 0;
    var fgrid = {
        style:{
            css:''
        },
        runcss:function(){
              var cssepend = ''
              $.each(fgrid.style, function(key, va){
                 cssepend +=  va;
              })
              $('[data-savedcss="framework"]').html(cssepend)
              info.html(cssepend);
        },
        gridcolumn:function(value){
          columns = value;
          pasentes =  100/value;
          var stylecss = fgrid.cssgrid(value, pasentes);
          
          fgrid.style.css = stylecss;
          $('[data-breaking]').trigger('change');
          fgrid.runcss()
          $('[data-preview="grid"]').empty()
          
          var div2 = value/2
          var div3 = div2/2
          
          var numver16 = []
          for(i = value; i > 0; i--){
            numver16.push('1')
          }
          $('[data-preview="grid"]').append(fgrid.gridrows(numver16));
           $('[data-preview="grid"]').append(fgrid.gridrows([value]));
          $('[data-preview="grid"]').append(fgrid.gridrows([div2, div2]));
          var last = Number(value) - 8
           $('[data-preview="grid"]').append(fgrid.gridrows([1,last, 7]));
           $('[data-preview="grid"]').append(fgrid.gridrows([2,last, 6 ]));
           $('[data-preview="grid"]').append(fgrid.gridrows([3, last, 5 ]));
          $('[data-preview="grid"]').append(fgrid.gridrows([4, last, 4]));
          $('[data-preview="grid"]').append(fgrid.gridrows([5,last, 3]));
          $('[data-preview="grid"]').append(fgrid.gridrows([6,last,2]));
          $('[data-preview="grid"]').append(fgrid.gridrows([7,last, 1 ]));
          $('[data-preview="grid"]').append(fgrid.gridrows([8,last ]));
          $('[data-preview="grid"]').append(fgrid.gridrows([9,last-1 ]));
          $('[data-preview="grid"]').append(fgrid.gridrows([10,last-2 ]));
         $('[data-preview="grid"]').append(fgrid.gridrows([11,last-3 ]));
          $('[data-preview="grid"]').append(fgrid.gridrows([2, 2, 2, 2 ]));
          $('[data-preview="grid"]').append(fgrid.gridrows([3, 3, 3, 3]));
          $('[data-preview="grid"]').append(fgrid.gridrows([5, 5]));
          $('[data-preview="grid"]').append(fgrid.gridrows(['offset-4 grid-5', 3]));
         
          
          var gridrils  = $('<div class="gridruls"></div>');
          gridrils.append(fgrid.gridrows(numver16));
          $('[data-preview="grid"]').append(gridrils);
        },
        cssgrid:function(list, grid, type){
          if(!type){
            type = ''
          }
          var css = ''
          for(i = list; i > 0; i--){
              var width = grid*i
               //css += i+':'+width+', '
               css += fgrid.cssgridwidth(i,width, type)
          }
          for(i = list; i >= 0; i--){
              var width = grid*i
               //css += i+':'+width+', '
               css += fgrid.cssgridoffset(i,width, type)
          }
          return css            
        },
        cssgridwidth:function(index, width, mode){
          var style = '.grid-'+mode+index+' { \n'+
                          'width: '+width+'%; \n'+
                      '} \n'
          return style
        },
        cssgridoffset:function(index, width, mode){
          var offectmode = '-'
          
          if(mode==''){
            offectmode = ''
          }
          var style = '.grid-'+mode+offectmode+'offset-'+index+' { \n'+
                          ' margin-left: '+width+'%; \n'+
                      '} \n'
          return style
        },
        gridrows:function(grids){
          var row = $('<div class="row"></div>');
          if(grids){
            $.each(grids, function(index, val){
                   row.append('<div class="gridcol grid-'+val+'"><div class="content">Grid '+val+'</div></div>');
            })
          }
            return row;  
        },
        guttercolumn:function(gutter){
              var getcss = $('[data-gutter="gutter"]').html()
              getcss = getcss.replace(/{gutter}/g, gutter)
              fgrid.style.gutter = getcss;
              fgrid.runcss()
        },
        breakingpoints:function(media, point){
              var decktopcss ='@media (min-width: '+media+'px) {\n'
                decktopcss += fgrid.cssgrid(columns, pasentes, point);
                decktopcss +='}\n';
               fgrid.style[point] = decktopcss;
               fgrid.runcss()
        }
        
    }
    
   
    
    $('[data-tylefunction]').change(function(){
        var functionname = $(this).data('tylefunction');
        var getvalue = $(this).val()
        if(fgrid[functionname]){
          fgrid[functionname](getvalue)
        }
    })
    
    $('[data-breaking]').change(function(){
        var datapoint = $(this).data('breaking');
        var media = $(this).val()
        fgrid.breakingpoints(media, datapoint)
    })
    
    $('[data-breaking]').trigger('change');
    $('[data-tylefunction]').trigger('change');
  
  
});