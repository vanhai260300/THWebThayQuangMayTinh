<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="ft col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<p class="titleft">INFORMATION</p>
				<p><a href=""><i class="fa fa-chevron-circle-right"></i>Giới thiệu</a></p>
				<p><a href=""><i class="fa fa-chevron-circle-right"></i>Giao hàng - Đổi trả</a></p>
				<p><a href=""><i class="fa fa-chevron-circle-right"></i>Chính sách bảo mật</a></p>
				<p><a href=""><i class="fa fa-chevron-circle-right"></i>Liên Hệ</a></p>
			</div>
			<div class="ft col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<p class="titleft">HELP</p>
				<p><a href="?menu=huong_dan_mua_hang"><i class="fa fa-chevron-circle-right"></i>Hướng dẫn mua hàng</a></p>
				<p><a href=""><i class="fa fa-chevron-circle-right"></i>Hướng dẫn thanh toán</a></p>
			</div>
			<div class="ft col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<p class="titleft">WEBSITE</p>
				<div class="contact">			
					<p class="bold">THE WEBSITE IS DESIGN BY VVH</p>
					<p><i class="fa fa-map-marker"></i>Đà Nẵng</p>
	              	<p><i class="fa fa-envelope"></i>ntlv2006@gmail.com</p>
	                <p><i class="fa fa-phone"></i>0966 710 265</p>
				</div>	
			</div>
			<div class="ft col-xs-12 col-sm-12 col-md-3 col-lg-3">
				<p class="titleft">CONNECT</p>
				<ul class="connect">
					<li><a href="https://www.facebook.com/vuongs.nguyens.395/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
					<li><a href="http://youtube.com"><i class="fa fa-youtube"></i></a></li>
				</ul>
				<p></p>
			</div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style>
    #cfacebook{
        position: fixed; 
        bottom: 0px;
        right: 8px;
        z-index: 999999999999999;
        width: 250px; height: auto;
        box-shadow: 6px 6px 6px 10px rgba(0,0,0,0.2);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        overflow: hidden;
    }
    #cfacebook .fchat{float: left; width: 100%; height: 295px; overflow: hidden; display: none; background-color: #fff;}
    #cfacebook .fchat .chat-single{float: left; line-height: 25px; line-height: 25px; color: #333; width: 100%;}
    #cfacebook .fchat .chat-single a{float: right; text-decoration: none; margin-right: 10px; color: #888; font-size: 12px;}
    #cfacebook .fchat .chat-single a:hover{color: #222;}
 
    #cfacebook .fchat .fb-page{margin-top: -130px; float: left;}
    #cfacebook a.chat_fb{
        float: left;
        padding: 0 25px;
        width: 250px;
        color: #fff;
        text-decoration: none;
        height: 40px;
        line-height: 40px;
        text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);        
    
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);
        background-repeat: repeat-x;
        background-size: auto;
        background-position: 0 0;
        background-color: #FF6F61;
        border: 0;
        border-bottom: 1px solid #FF6F61;
        z-index: 9999999;
        margin-right: 12px; font-size: 18px;}
   #cfacebook a.chat_fb:hover{color: yellow; text-decoration: none;}
</style>
<script>
    function fchat()
    {
            var tchat= document.getElementById("tchat").value;
            if(tchat==0 || tchat=='0')
            {                
                document.getElementById("fchat").style.display = "block";
                document.getElementById("tchat").value=1;
            }else{
                document.getElementById("fchat").style.display = "none";
                document.getElementById("tchat").value=0;
            }             
    }
    setTimeout(function() {document.getElementById("fchat").style.display = "block";}, 6000);
</script>
 
<div id="cfacebook">
    <a href="javascript:;" class="chat_fb" onclick="javascript:fchat();"><i class="fa fa-comments"></i> Hỗ trợ trực tuyến</a>
    <div id="fchat" class="fchat">
        <div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/blogthongtingiaitri9x" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
        <div class="chat-single"><a target="_blank" href="https://www.facebook.com/blogthongtingiaitri9x"><i class="fa fa-facebook-square"></i> BombShop </a></div>
    </div>
    <input type="hidden" id="tchat" value="0"/>
</div>