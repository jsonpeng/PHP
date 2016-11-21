    
    <div class="main">
    	<div class="mainLeft">
        	<img src="images/product.gif" /><!-- 隐式块级 -->
            <ul class="cate">
            	<li class="cateTop"></li>
                <li class="cateMid">
                	<a href="#">商务会议</a>
                    <a href="#">商务会议</a>
                    <a href="#">商务会议</a>
                    <a href="#">商务会议</a>
                </li>
                <li class="cateBtm"></li>
            </ul>
            <img src="images/search.gif" />
            <div class="search">
            <form>
            	<p><input type="text" name="keyword" size="15" /></p>
            	<p>
                	<select name="cate">
                		<option value="">请选择</option>
                    	<option value="">商务会议</option>
                    	<option value="">商务会议</option>
                	</select>
                </p>
                <p><input type="image" src="images/search_left.gif" /></p>
            </form>
            </div>
        </div>
        <div class="mainRight">
        	<div class="rightTOP"></div>
            <div class="rightMid">
            	<div class="breadCrumb">您现在的位置是：新闻中心</div>
                <ul class="news">
					<?php foreach($result as $k=>$v):?>
                	<li><a href="index.php?c=news&a=info&id=<?php echo $v['id'];?>"><?php echo $v['title'];?>	<?php echo date('Y-m-d',$v['mtime']);?></a></li> 
					<?php endforeach;?>
                </ul>
				<?php echo $page;?>
            </div>
            <div class="rightBtm"></div>
        </div>
        <div class="clear"></div>    
    </div>
