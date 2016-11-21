
    
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
            	<div class="breadCrumb"><?php echo $result['title'];?></div>
                <div class="add">
                <?php echo $result['content'];?>
                </div>
            </div>
            <div class="rightBtm"></div>
        </div>
        <div class="clear"></div>    
    </div>
    