<?php 
/*
* 碎语部分
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div class="col-md-7 content">
	<div class="tw">

			<?php 
			  foreach($tws as $val):
    $author = $user_cache[$val['author']]['name'];
    $avatar = empty($user_cache[$val['author']]['avatar']) ? 
                BLOG_URL . 'admin/views/images/avatar.jpg' : 
                BLOG_URL . $user_cache[$val['author']]['avatar'];
    $tid = (int)$val['id'];
    $img = empty($val['img']) ? "" : '<a title="查看图片" href="'.BLOG_URL.str_replace('thum-', '', $val['img']).'" target="_blank"><img style="border: 1px solid #EFEFEF;" src="'.BLOG_URL.$val['img'].'"/></a>';
			?> 
			<li class="li">
				<div class="tw-body">
					<div class="tw-text">
						<div class="gravatar">
							<img src="<?php echo $avatar; ?>" width="32px" height="32px" />
						</div>
						<div class="tw-meta">
							<span class="author"><?php echo $author; ?></span>
							<span class="time">(<?php echo $val['date'];?>)</span>
						</div>
						<div class="tw-p">
							<?php echo $val['t'];?>
						</div>
					</div>
				</div>


			</li>
			<?php endforeach;?>
			<?php if($pageurl) {?>
			<li id="pagenavi"><?php echo $pageurl;?><span></span></li>
			<?php } ?>
		
	</div>
</div>
<?php
 include View::getView('side');
 include View::getView('footer');
?>