
   

    $('#myTable').SetEditable({
        columnsEd: "0,1,2"
        });
    
    
    
        //paging//
        $.fn.pageMe = function(opts){
        var $this = this,
            defaults = {
                perPage: 7,
                showPrevNext: false,
                hidePageNumbers: true
            },
            settings = $.extend(defaults, opts);
        
        var listElement = $this;
        var perPage = settings.perPage; 
        var children = listElement.children();
        var pager = $('.pager');
        
        if (typeof settings.childSelector!="undefined") {
            children = listElement.find(settings.childSelector);
        }
        
        if (typeof settings.pagerSelector!="undefined") {
            pager = $(settings.pagerSelector);
        }
        
        var numItems = children.size();
        var numPages = Math.ceil(numItems/perPage);
    
        pager.data("curr",0);
        
        if (settings.showPrevNext){
            $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
        }
        
        var curr = 0;
        while(numPages > curr && (settings.hidePageNumbers==false)){
            // if(curr==1)
            // {
            //     $('<li><a href="#" class="page_link">First</a></li>').appendTo(pager);
    
            // }
            // else 
            if(curr==numPages-1&&numPages>5)
            {
    
                $('<li disabled><a   >...</li>').appendTo(pager);
                $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
    
            }
            else
            {
                $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
    
            }
            curr++;
            if(curr>7&&curr<numPages)
            {
                pager.children().eq(curr).addClass("hidden");
            }
        }
        
        if (settings.showPrevNext){
            $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
        }
        
        pager.find('.page_link:first').addClass('active');
        pager.find('.prev_link').hide();
        if (numPages<=1) {
            pager.find('.next_link').hide();
        }
          pager.children().eq(1).addClass("active");
        
        children.hide();
        children.slice(0, perPage).show();
        
        pager.find('li .page_link').click(function(){
            var clickedPage = $(this).html().valueOf()-1;
            goTo(clickedPage,perPage);
            return false;
        });
        pager.find('li .prev_link').click(function(){
            previous();
            return false;
        });
        pager.find('li .next_link').click(function(){
            next();
            return false;
        });
        
        function previous(){
            var goToPage = parseInt(pager.data("curr")) - 1;
            goTo(goToPage);
        }
         
        function next(){
            goToPage = parseInt(pager.data("curr")) + 1;
            goTo(goToPage);
        }
        
        function goTo(page){
            var startAt = page * perPage,
                endOn = startAt + perPage;
            
            children.css('display','none').slice(startAt, endOn).show();
            
            if (page>=1) {
                pager.find('.prev_link').show();
            }
            else {
                pager.find('.prev_link').hide();
            }
            
            if (page<(numPages-1)) {
                pager.find('.next_link').show();
            }
            else {
                pager.find('.next_link').hide();
            }
            
            pager.data("curr",page);
              pager.children().removeClass("active");
            pager.children().eq(page+1).addClass("active");
            
            pager.children().eq(page+1).removeClass("hidden");
    
        //     for (var k=0;k<=numPages;k++)
        //    {
        //     pager.children().eq(k).removeClasss("hidden");
        //    }
           for (var k=1;page+k<=0;k--)
           {
            pager.children().eq(page+k).removeClass("hidden");
           }
           for (var k=2;page+k<=numPages;k++)
           {
            pager.children().eq(page+k).removeClass("hidden");
           }
    
            for (var k=4;page+k<numPages;k++)
           {
            pager.children().eq(page+k).addClass("hidden");
           }
           for (var k=-4;page+k>1;k--)
           {
            pager.children().eq(page+k).addClass("hidden");
           }
    
        }
    };
    
    $(document).ready(function(){
        
      $('#myTable').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:7});
        
    });
    //paging//
    
    
    
    
    function sortTable(n) {
        
        
      var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
      table = document.getElementById("myTable");
      switching = true;
      //Set the sorting direction to ascending:
      dir = "asc"; 
      /*Make a loop that will continue until
      no switching has been done:*/
      while (switching) {
        //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the
        first, which contains table headers):*/
        for (i = 0; i < (rows.length - 1); i++) {
          //start by saying there should be no switching:
          shouldSwitch = false;
          /*Get the two elements you want to compare,
          one from current row and one from the next:*/
          x = rows[i].getElementsByTagName("TD")[n];
          y = rows[i + 1].getElementsByTagName("TD")[n];
          /*check if the two rows should switch place,
          based on the direction, asc or desc:*/
          if (dir == "asc") {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
              //if so, mark as a switch and break the loop:
              shouldSwitch= true;
              break;
            }
          } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
              //if so, mark as a switch and break the loop:
              shouldSwitch = true;
              break;
            }
          }
        }
        if (shouldSwitch) {
          /*If a switch has been marked, make the switch
          and mark that a switch has been done:*/
          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
          switching = true;
          //Each time a switch is done, increase this count by 1:
          switchcount ++;      
        } else {
          /*If no switching has been done AND the direction is "asc",
          set the direction to "desc" and run the while loop again.*/
          if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
          }
        }
      }
    }

