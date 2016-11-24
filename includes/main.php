<style type="text/css">
  .slider-prev{background-image: url('images/slider-prev.png')}
  .slider-next{background-image: url('images/slider-next.png')
</style>
<div id="content" class="cf">
  <div id="slider" class="slider-content">
    <div id="basic-slider" style="height: 327.958px; max-width: 480px; position: relative;">  
      <ul class="bjqs" style="height: 327.958px; width: 100%; display: block;">
        <?php
        $slide=$groups->getByParentId(SLIDER);
        while($slideGet=$conn->fetchArray($slide)){?>
          <li class="bjqs-slide" style="">
            <img class="slider-element" src="<?=CMS_GROUPS_DIR.$slideGet['image'];?>" alt="">
            <p class="slider-element"><?=$slideGet['shortcontents'];?></p>  
            <p class="bjqs-descript"><?=$slideGet['shortcontents'];?></p>
          </li>
        <?php }?>
      </ul>
      <ul class="bjqs-controls v-centered">
        <li class="bjqs-prev">
          <a href="#" data-direction="previous" style="top: 43.5294%;"><span class="slider-prev"></span></a>
        </li>
        <li class="bjqs-next">
          <a href="#" data-direction="forward" style="top: 43.5294%;"><span class="slider-next"></span></a>
        </li>
      </ul>
    </div>
  </div>  
  <article id="post-77" class="single-view post-77 page type-page status-publish hentry">
    <header class="entry-header cf">
      <?php $welcome=$conn->fetchArray($groups->getById(WELCOME));?>
      <h1 class="entry-title"><? if($lan=='en') echo $welcome['nameen']; else echo $welcome['name'];?></h1>
    </header>
    <div class="entry-byline cf">
    </div>
    <div class="entry-content cf" style="text-align: justify;">
      <? if($lan=='en') echo $welcome['shortcontentsen']; else echo $welcome['shortcontents'];?>
      <br>
      <a href="<?=$welcome['urlname'];?>"><em><strong>Read More</strong></em></a>
      </p>
    </div>
    <footer class="entry-footer cf">
    </footer>
  </article>
  <div id="comment-area">
    <div id="comments">
    </div>
  </div>
</div>

<div id="sidebar-right" class="sidebar cf">
  <div id="widgets-wrap-sidebar-right">
    
    <div id="text-3" class="widget-sidebar frontier-widget widget_text">
      <h4 class="widget-title">
        <? if($lan=='en') echo 'Important Links'; else echo 'उपयोगी लिङ्क्स';?>
      </h4>
      <div class="textwidget">
        <ul>
        <?php
        $links=$groups->getByParentIdWithLimit(LINKS,6);
        while($linksGet=$conn->fetchArray($links)){?>
          <li>
            <a href="<?=$linksGet['contents'];?>" title="<? if($lan=='en') echo $linksGet['nameen']; 
            else echo $linksGet['name'];?>" target="_blank">
              <? if($lan=='en') echo $linksGet['nameen']; else echo $linksGet['name'];?>
            </a>
          </li>
        <?php }?>
        </ul>
        <?php $linkUrl=$groups->getByIdResult(LINKS);?>
        <a style="font-weight: bold;font-size: 15px;float: right;" href="<?=$linkUrl['urlname'];?>">see more...</a>
      </div>
    </div>

    <div id="text-6" class="widget-sidebar frontier-widget widget_text">
      <div class="textwidget">
        <a href="bills.php"><img src="images/Untitled.png"></a>
      </div>
    </div>
    
    <div id="ewic-widget-2" class="widget-sidebar frontier-widget widget_ewic_sc_widget">
      
      <div id="text-4" class="widget-sidebar frontier-widget widget_text">
        <h4 class="widget-title">
          <? if($lan=='en') echo 'Downloads'; else echo 'डाउनलोड्स';?>
        </h4>
        <div class="textwidget">
        <ul>
          <?php
          $download=$groups->getByParentIdWithLimit(PUBLICATION,6);
          while($downloadGet=$conn->fetchArray($download)){?>
            <li>
              <a href="<?=CMS_FILES_DIR.$downloadGet['contents']?>" target="_blank">
                <? if($lan=='en') echo $downloadGet['nameen']; else echo $downloadGet['name'];?>
              </a>
            </li>
          <? }?>
          </ul>
          <?php $linkUrl=$groups->getByIdResult(PUBLICATION);?>
        <a style="font-weight: bold;font-size: 15px;float: right;" href="<?=$linkUrl['urlname'];?>">see more...</a>
        </div>
      </div>    
    </div>

    <div id="ewic-widget-2" class="widget-sidebar frontier-widget widget_ewic_sc_widget">
      
      <div id="text-4" class="widget-sidebar frontier-widget widget_text">
        <h4 class="widget-title">
          <? if($lan=='en') echo 'Sewakendra'; else echo 'सेवा केन्द्रहरु';?>
        </h4>
        <div class="textwidget">
        <ul>
          <?php
          $kendra = new Sewakendra();
          $list=$kendra->getSewaKendraWithLimit(5);
          while($row=$conn->fetchArray($list)){?>
            <li>
              <a href="sewakendra/<?=$row['urlname'];?>.html" target="_blank">
                <? if($lan=='en') echo $row['nameen']; else echo $row['name'];?>
              </a>
            </li>
          <? }?>
        </ul>
        <a style="font-weight: bold;font-size: 15px;float: right;" href="<? if($lan=='en') echo 'en/';?>sewakendra.html">see more...</a>
        </div>
      </div>    
    </div>

  </div>