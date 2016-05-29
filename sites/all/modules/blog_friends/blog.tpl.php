<?php

/**
 * @file
 * Default theme implementation for a testing page.
 *
 * Available variables:
 * - $title: The page title.
 * - $head: Header tags.
 * - $language: Language code. e.g. "en" for english.
 * - $language_rtl: TRUE or FALSE depending on right to left language scripts.
 * - $base_url: URL to home page.
 * - $contents: Main contents from database you want to render in this template.
 *
 * @see template_preprocess_a_testing_page()
 *
 * @ingroup themeable
 */
?>
<div id="testing-page">
<ul id="myTab" class="nav nav-tabs"> 
        <li class="active"><a href="#home" data-toggle="tab"><?php print render($blog['myblog']['title']);?></a></li>
        <li><a href="#secondColumn" data-toggle="tab"><?php print render($blog['friendsblog']['title']);?></a></li>
        <li><a href="#thirdColumn" data-toggle="tab"><?php print render($blog['interestingblog']['title']);?></a></li>
      </ul>
     <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade in active" id="home">
       <ul style="list-style-type:none;">
            <?php 
                if(!empty($blog['myblog']['blog']))
                    foreach($blog['myblog']['blog'] as $b){
                        echo '<li style="margin:5px;">';
                            echo '<div class="panel panel-default" style="border-color: rgba(255,255,255,.15);margin:0px;background-color:#f5f5f5;border-radius:4px;">
                             <!-- <div class="panel-heading">publisher</div> -->
                             <div class="panel-body" style="text-align:left;">
                                <div class="page-header" style="text-align:left; margin:10px 0 10px; padding-bottom:0px;">
                                    <h1 style="font-size:20px; margin-top:0px; margin-bottom:0px;">';
                                    echo $user->name;
                                    echo '<small>';
                                    echo $b['time'];
                                    echo '</small>';
                                    echo '</h1>';
                                echo '</div>';
                                echo $b['content'];
                            echo '</div>
                             <!-- <div class="panel-footer" style="text-align:right">2016.5.29</div> -->
                            </div> 
                        </li>';
                    }
                else
                    echo '你没有发表过博客哦~ 快去发一个吧~';
                ?>
        </ul>
      </div>   
 
   <div class="tab-pane fade" id="secondColumn">
         <ul style="list-style-type:none;">
            <?php 
                if(!empty($blog['friendsblog']['blog']))
                    foreach($blog['friendsblog']['blog'] as $b){
                        echo '<li style="margin:5px;">';
                            echo '<div class="panel panel-default" style="border-color: rgba(255,255,255,.15);margin:0px;background-color:#f5f5f5;border-radius:4px;">
                             <!-- <div class="panel-heading">publisher</div> -->
                             <div class="panel-body" style="text-align:left;">
                                <div class="page-header" style="text-align:left; margin:10px 0 10px; padding-bottom:0px;">
                                    <h1 style="font-size:20px; margin-top:0px; margin-bottom:0px;">';
                                    echo $b['username'];
                                    echo '<small>';
                                    echo $b['time'];
                                    echo '</small>';
                                    echo '</h1>';
                                echo '</div>';
                                echo $b['content'];
                            echo '</div>
                             <!-- <div class="panel-footer" style="text-align:right">2016.5.29</div> -->
                            </div> 
                        </li>';
                    }
                else
                    echo '您的朋友尚未发表过博客';
                ?>
        </ul>
   </div>
   <div class="tab-pane fade" id="thirdColumn">
     <ul style="list-style-type:none;">
            <?php 
                if(!empty($blog['interestingblog']['blog']))
                    foreach($blog['interestingblog']['blog'] as $b){
                        echo '<li style="margin:5px;">';
                            echo '<div class="panel panel-default" style="border-color: rgba(255,255,255,.15);margin:0px;background-color:#f5f5f5;border-radius:4px;">
                             <!-- <div class="panel-heading">publisher</div> -->
                             <div class="panel-body" style="text-align:left;">
                                <div class="page-header" style="text-align:left; margin:10px 0 10px; padding-bottom:0px;">
                                    <h1 style="font-size:20px; margin-top:0px; margin-bottom:0px;">';
                                    echo '<a class="badge" style="background-color:#428bca; border-radius:2px;" href="' . url("relationship/{$b['uid']}/request", array('query' => array('destination' => $_GET['q']))) . '">+</a>';
                                    echo $b['username'];
                                    echo '<small>';
                                    echo $b['time'];
                                    echo '</small>';
                                    echo '</h1>';
                                echo '</div>';
                                echo $b['content'];
                            echo '</div>
                             <!-- <div class="panel-footer" style="text-align:right">2016.5.29</div> -->
                            </div> 
                        </li>';
                    }
                else
                    echo '没有找到您感兴趣的博客';
                ?>
        </ul>
   </div>
  </div>
</div>