<div class="slider">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
           <?php 
              include("Admin/connection.php"); 
              $query = mysqli_query($connect,"SELECT * FROM slider Where status=1 ORDER BY id DESC LIMIT 5");
              while($row = mysqli_fetch_row($query))
              {
                echo "<div>
                        <img data-u=\"image\" src=\"Admin/$row[1]\" />
                     </div>";
              }
            
           ?>
            
            <a data-u="any" href="https://www.jssor.com/wordpress.html" style="display:none">wordpress gallery</a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
</div>