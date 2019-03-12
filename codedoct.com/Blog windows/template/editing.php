.main-inner .column-center-inner {
  padding: 0 0 0 $(main.padding);
}

menjadi

.main-inner .column-center-inner {
  padding: 0;
}
//

//tambah ini
.main-inner .column-right-inner {
  padding: 0 $(main.padding) 0 0;
}
//

//edit margin title
h3.post-title, .comments h4 {
  font: $(post.title.font);
  margin: .75em 0 0;
}
menjadi
h3.post-title, .comments h4 {
  font: $(post.title.font);
  margin: 0 0 .75em 0;
}
//

//edit post title
h3.post-title, .comments h4 {
  font: $(post.title.font);
  
  margin: 0 0 .75em 0;
}
menjadi
h3.post-title, .comments h4 {
  font: $(post.title.font);
  margin: -10px -10px 0 -10px;

  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
  padding: 10px 15px;
  background: #f6f6f6;
  border-bottom: 1px solid #e6e6e6;
}
//

//comment feeds link
<div class='feed-links'>
  <data:feedLinksMsg/>
  <b:loop values='data:links' var='f'>
     <a class='feed-link' expr:href='data:f.url' expr:type='data:f.mimeType' target='_blank'><data:f.name/> (<data:f.feedType/>)</a>
  </b:loop>
  </div>
menjadi
<!--<div class='feed-links'>
  <data:feedLinksMsg/>
  <b:loop values='data:links' var='f'>
     <a class='feed-link' expr:href='data:f.url' expr:type='data:f.mimeType' target='_blank'><data:f.name/> (<data:f.feedType/>)</a>
  </b:loop>
  </div>-->
//hehe

//header fullscreen
<div class='cap-top'>
  <div class='cap-left'/>
  <div class='cap-right'/>
</div>
menjadi
<div class='cap-top'>
  <div class="cap-left">
    <div class="dalam">
      <li><a href="http://www.codedoct.com/">Home</a></li>
      <li><a href="https://www.blogger.com/profile/02232574841252088106">Contact Us</a></li>
      <li><a href="">Disclaimer</a></li>
      <li><a id="garis-right" href="">Privacy Policy</a></li>
    </div>
  </div>
  <div class='cap-right'/>
</div>
//

//footer
<b:if cond='data:title != &quot;&quot;'>
    <h2 class='title'><data:title/></h2>
  </b:if>
<b:if cond='data:title != &quot;&quot;'>
    <h2 class='title' id="custom-header" style="border-top: 1px solid #e6e6e6;border-left: 1px solid #e6e6e6;border-right: 1px solid #e6e6e6;"><!--data:title/--></h2>
  </b:if>
//

<!-- tampilan comment -->
//ubah ini
<b:include data='post' name='threaded_comments'/>
//menjadi ini
<b:include data='post' name='comments'/>

//tambah code ini di atas "]]></b:skin>"
#comments {}
#comments h3 {margin-bottom:15px;font-size:18px;}
.comment_avatar_wrap{
width:42px;
height:42px;
border: 1px solid #C4C4C4;
border-top-color: #E4E4E4;
border-left-color: #E4E4E4;
background:#fcfcfc;
padding:4px;
border-radius: 2px;
text-align:center;
margin-bottom:20px;
}
#comments .avatar-image-container {
float: left;
margin: 0 10px 0 0;
width: 42px;
height: 42px;
max-width:42px;
max-height:42px;
padding: 0;
margin-bottom:10px;
}
#comments .avatar-image-container img {
width: 42px;
height: 42px;
max-width: 42px;
max-height: 42px;
background:url(http://2.bp.blogspot.com/-fjaZBtfvzac/UN1mw2tUamI/AAAAAAAADkc/XdKqt8hWZ6w/s1600/anon.jpg) no-repeat;
}
.comment_name a {
font-weight: bold;
padding: 5px 0 0 0;
font-size: 13px;
text-decoration: none;
}
.comment_admin .comment_name  {
font-weight: bold;
padding: 10px;
font-size: 13px;
text-decoration: none;
background:#eee;
}
.comment_admin .comment_date  {
font-weight: normal;
font-size:11px;
}
.comment_name {
background:#f9f9f9;
border:1px solid #eeeeee;
padding:10px;
font-size:13px;
font-weight:bold;
position:relative;
}
.comment_service{
margin-top:5px
}
.comment_date {
color: #a9a9a9;
float:right;
font-size:11px;
font-weight:normal;
margin-top:-3px;
}
.comment_date a{
float:right;
font-size:11px;
font-weight:normal;
}
.comment_date a:hover{
color: #a9a9a9;
text-decoration:none;
}
.comment_body{
margin-left:66px;
margin-top: -72px;
background:#fcfcfc;
border:1px solid #d1d1d1;
padding:10px;
border-radius: 2px;
}
.comment_body p {
line-height: 1.5em;
margin: 5px 0 0 0;
color: #666;
border:1px solid #eee;
font-size: 13px;
word-wrap:break-word;
background:#fff;
padding:10px;
}
.comment_inner {
padding-bottom: 5px;
margin: 5px 0 5px 0;
}
.comment_child .comment_wrap {padding-left: 7%;}
.comment_reply {
display: inline-block;
margin-top:8px;
margin-left:-5px;
padding: 1px 12px;
color: #fff !important;
text-align: center;
text-decoration: none;
border-radius: 2px;
background: #bababa;
font: 11px/18px sans-serif;
transition: background-color 1s ease-out 0s;
}
.comment_reply:hover {
text-decoration: none !important;;
background: #00a1d6;
}
.unneeded-paging-control {display: none;}
.comment-form {max-width: 100%;!important;}
#comment-editor {width:103%!important;background:transparent url('data:image/gif;base64,R0lGODlhKwALAPAAAKrD2AAAACH5BAEKAAEAIf4VTWFkZSBieSBBamF4TG9hZC5pbmZvACH/C05FVFNDQVBFMi4wAwEAAAAsAAAAACsACwAAAjIMjhjLltnYg/PFChveVvPLheA2hlhZoWYnfd6avqcMZy1J14fKLvrEs/k+uCAgMkwVAAAh+QQBCgACACwAAAAAKwALAIFPg6+qw9gAAAAAAAACPRSOKMsSD2FjsZqEwax885hh3veMZJiYn8qhSkNKcBy4B2vNsa3pJA6yAWUUGm9Y8n2Oyk7T4posYlLHrwAAIfkEAQoAAgAsAAAAACsACwCBT4OvqsPYAAAAAAAAAj1UjijLAg9hY6maalvcb+IPBhO3eeF5jKTUoKi6AqYLwutMYzaJ58nO6flSmpisNcwwjEfK6fKZLGJSqK4AACH5BAEKAAIALAAAAAArAAsAgU+Dr6rD2AAAAAAAAAJAVI4oy5bZGJiUugcbfrH6uWVMqDSfRx5RGnQnxa6p+wKxNpu1nY/9suORZENd7eYrSnbIRVMQvGAizhAV+hIUAAA7') no-repeat 50% 30%}}
.comment_form a {
text-decoration: none;
text-transform: uppercase;
font-weight: bold;
font-family: Arial, Helvetica, Garuda, sans-serif;
font-size: 15px;
}
.comment_form a:hover {text-decoration: underline;}
.comment-form p:after{
content:"";
width:0;
height:0;
position:absolute;
bottom:-16px;
left:15px;
border:8px solid transparent;
border-color:#666 transparent transparent;
}
.comment_reply_form {
padding: 0 0 0 70px;
}
.comment_reply_form .comment-form {width: 99%;}
.comment_emo_list{
display:none;
}
.comment_emo_list .item {
float: left;
text-align: center;
margin: 10px 10px 0 0;
height: 40px;
width:41px;
}
.comment_emo_list span {
display: block;
font-weight: bold;
font-size: 11px;
letter-spacing: 1px;
}
.comment_emo_list span {
display: block;
font-weight: bold;
font-size: 11px;
letter-spacing: 1px;
}
.comment_youtube {max-width:100%!important;width:400px;height:225px;display:block;margin:auto}
.comment_img {max-width:100%!important;}
.deleted-comment {
padding: 10px 10px 10px 10px;
display: block;
color: #CCC;
}
.comment_arrow {
display: block;
width: 9px;
height: 18px;
background: url(http://3.bp.blogspot.com/-NONrBLhghFk/To0nNB1LmkI/AAAAAAAAAI4/CAuzDfYiCiU/s1600/comment-arrow.gif) no-repeat;
position: absolute;
margin-left: -19px;
}
.comment_header{width:50px}
#respond {
overflow: hidden;
padding-left: 10px;
clear: both;
}
.comment_avatar img{width:42px;height:42px;background:url(http://2.bp.blogspot.com/-fjaZBtfvzac/UN1mw2tUamI/AAAAAAAADkc/XdKqt8hWZ6w/s1600/anon.jpg) no-repeat}
.comment-delete img{float:right;margin-left:15px;margin-top:3px;margin-right:10px}
.comment_author_flag {display:none}
.comment_admin .comment_author_flag {display:inline;background:url(http://4.bp.blogspot.com/-lABM2Z7_HVs/Ui_XAxhHY6I/AAAAAAAAFXc/wbQNB2SkcIQ/s1600/author.png)no-repeat;font-size:13px;font-weight:normal;padding:2px 6px;right:-23px;margin-top:-23px;color:#fff;border-radius:4px;text-transform:uppercase;position:absolute;width:36px;height:36px;}
iframe{border:none;overflow:hidden}

//ganti code ini
<b:includable id='comments' var='post'>...</b:includable>
//dengan ini
<b:includable id='comments' var='post'>
<div class='comments' id='comments'>
 <b:if cond='data:post.allowComments'>
  <b:if cond='data:post.numComments != 0'>
   <h3>
    <b:if cond='data:post.numComments == 1'>1 <data:commentLabel/>:
     <b:else/>
     <data:post.numComments/> <data:commentLabelPlural/>
    </b:if>
   </h3>
  </b:if>
               
  <b:if cond='data:post.commentPagingRequired'>
   <span class='paging-control-container'>
    <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'><data:post.oldestLinkText/></a>
    &#160;
    <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'><data:post.olderLinkText/></a>
    &#160;
    <data:post.commentRangeText/>
    &#160;
    <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'><data:post.newerLinkText/></a>
    &#160;
    <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'><data:post.newestLinkText/></a>
   </span>
  </b:if>
                       
  <div class='clear'/>
  <div id='comment_block'>
   <b:loop values='data:post.comments' var='comment'>
                                                                             
   <div class='data:comment.adminClass' expr:id='data:comment.anchorName'>                                                                                     
      <b:if cond='data:post.adminClass == data:comment.adminClass'>
       &lt;div class=&#39;comment_inner comment_admin&#39;&gt;
       <b:else/>
                            &lt;div class=&#39;comment_inner&#39;&gt;
      </b:if>
    
    <div class='comment_header'>
     <div class='comment_avatar_wrap'>
     <div class='comment_avatar'>
      <img alt='avatar' expr:src='data:comment.authorAvatarSrc' expr:title='data:comment.author'/>
              </div>
<a class='comment_reply' expr:href='&quot;#r_&quot;+data:comment.anchorName' expr:id='&quot;r&quot;+data:comment.anchorName' onclick='javascript:Display_Reply_Form(this)' title='Balas'>Reply</a>
     </div>
                         
     <div class='clear'/>
    </div>
         
    <div class='comment_body'>
                                      <span class='comment_arrow'/>
     <div class='comment_name'>
      <b:if cond='data:comment.authorUrl'>
       <a expr:href='data:comment.authorUrl' expr:title='data:comment.author' rel='nofollow' target='_blank'><data:comment.author/></a>
       <b:else/>
       <data:comment.author/>
      </b:if>
       <b:if cond='data:comment.author == data:post.author'>
         <span class='comment_author_flag'>Admin</span>
       </b:if>   
                  <span class='comment_service'>
      <a class='comment-delete' expr:href='&quot;http://www.blogger.com/delete-comment.g?blogID=&quot; + data:blog.blogId + &quot;&amp;amp;postID=&quot; + data:comment.id' expr:title='data:top.deleteCommentMsg'>
<img alt='delete' src='http://2.bp.blogspot.com/-d-5BS0YCkho/UOKe2UIw0rI/AAAAAAAAC4w/md_iYNVHaHk/s1600/delete4.png' title='Hapus Komentar'/>
</a>                
      <span class='comment_date'><a expr:href='data:comment.url' rel='nofollow' title='comment permalink'>
                  <data:comment.timestamp/>
        </a></span>
  </span></div>
     <b:if cond='data:comment.isDeleted'>
      <span class='deleted-comment'><data:comment.body/></span>
      <b:else/>
      <p><data:comment.body/></p>
                        <div class='clear'/>
                      
     </b:if>
                                                      
    </div>                         
     <div class='clear'/>
     &lt;/div&gt;
     <div class='clear'/>
           
    <div class='comment_child'/>
    <div class='comment_reply_form' expr:id='&quot;r_f_&quot;+data:comment.anchorName'/>              
    </div>
   </b:loop>              
   </div>    
    <div class='clear'/>
    <b:if cond='data:post.commentPagingRequired'>
     <span class='paging-control-container'>
       <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'><data:post.oldestLinkText/></a>
       &#160;
       <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'><data:post.olderLinkText/></a>
       &#160;
       <data:post.commentRangeText/>
       &#160;
       <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'><data:post.newerLinkText/></a>
       &#160;
       <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'><data:post.newestLinkText/></a>
     </span>
    </b:if>
    <div class='clear'/>
  <div class='comment_form'>         
         
   <b:if cond='data:post.embedCommentForm'>
    <b:if cond='data:post.allowNewComments'>   
      <div class='comment_emo_list'/>
     <b:include data='post' name='threaded-comment-form'/>
       <b:else/>
       <data:post.noNewCommentsText/>
    </b:if>
    <b:else/>
    <b:if cond='data:post.allowComments'>
     <a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick' expr:title='data:postCommentMsg'><data:postCommentMsg/></a>
    </b:if>
   </b:if>
  </div>
 </b:if>
</div>                
       <script type='text/javascript'>
       //<![CDATA[
       if (typeof(jQuery) == 'undefined') {
 //output the script (load it from google api)
 document.write("<scr" + "ipt type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></scr" + "ipt>");
}
       //]]>
       </script>
     
       <script async='async' expr:src='data:post.commentSrc' type='text/javascript'/>
       <script type='text/javascript'>
      
         <b:if cond='data:post.numComments != 0'>
         var Items = <data:post.commentJso/>;
         var Msgs = <data:post.commentMsgs/>;
         var Config = <data:post.commentConfig/>;
        <b:else/>
         var Items = {};
         var Msgs = {};
         var Config = {&#39;maxThreadDepth&#39;:&#39;0&#39;};
        </b:if>
       //<![CDATA[
       //Global setting
        Config.maxThreadDepth = 6;//Kedalaman tingkat threaded comment
        Display_Emo = true;//Tampilkan emoticon? ketik "false" untuk menyembunyikan
        Replace_Youtube_Link = false;//Embed video YouTube, ketik "false" untuk mendisable
        Replace_Image_Link = false;//Auto replace link image,  ketik "false" untuk mendisable.
                                Replace_Force_Tag = false;//Auto replace virtual tag contoh: [pre] menjadi <pre>, dan [/pre] menjadi </pre>, apabila salah menulis, tidak akan berfungsi
        Replace_Image_Ext = ['JPG', 'GIF', 'PNG', 'BMP'];//(support: jpg, gif, png, bmp),hanya berfungsi apabila Replace_Image_Link=true
      
        //Pengaturan Emoticon
        Emo_List = [
        ':)'  ,'http://1.bp.blogspot.com/-2Z7Cwe04x-Q/UH9THzWWJII/AAAAAAAACtA/ChwawyzYsDI/s1600/smile1.gif',
        ':('  ,'http://4.bp.blogspot.com/-yXc7xHs5mXc/UKhVJLBfdaI/AAAAAAAADPY/LJKRsefyeao/s1600/sad.gif',
        '=('  ,'http://1.bp.blogspot.com/-7I8DdEs58z0/UKhVKHT1yUI/AAAAAAAADPg/Lyzv-E74EdM/s1600/sadanimated.gif',
        '^_^'  ,'http://1.bp.blogspot.com/-IoZJlpB0-dE/UKhVKnR0BDI/AAAAAAAADPo/Kz87N1Aj4X8/s1600/smile.gif',
        ':D'  ,'http://3.bp.blogspot.com/-WeTjMT8JDhg/UKhVHlZ88II/AAAAAAAADPI/b1gpiAvIkCc/s1600/icon_smile.gif',
        '=D'  ,'http://1.bp.blogspot.com/-ljeobbA3sn0/UKhVGtJsGRI/AAAAAAAADPA/8lyzE4JwrwQ/s1600/hihi.gif',
        '|o|'  ,'http://4.bp.blogspot.com/-ip66eq3uRI8/UKhVF-QK8lI/AAAAAAAADO4/P0G-1PcWpQs/s1600/applause.gif',
        '@@,'  ,'http://4.bp.blogspot.com/-w1VfvgO2-e8/UKhVIT7XLhI/AAAAAAAADPQ/cJ0KDjEsoj4/s1600/rolleyes.gif',
        ';)'  ,'http://3.bp.blogspot.com/-5zPfqshivtY/UKhVONWZnkI/AAAAAAAADQI/iCDxagcaj5s/s1600/wink.gif',
        ':-bd'  ,'http://4.bp.blogspot.com/-hPd-oj2Bzo4/UKhVLkmQjOI/AAAAAAAADPw/3O1iuAukZXg/s1600/thumb.gif',
        ':-d'  ,'http://2.bp.blogspot.com/-yElQmFAIiII/UKhVMcObcQI/AAAAAAAADP4/-qdEpW8zCmY/s1600/thumbsup.gif',
        ':p'  ,'http://2.bp.blogspot.com/-bs2e9gRj748/UKhVNKLs2YI/AAAAAAAADQA/mF7lDNOChac/s1600/wee.gif',     
        ];
      
                             
                                //Config Force tag list, define all in lower case
                                Force_Tag = [
                                    '[pre]','<pre>',
                                    '[/pre]','</pre>',
                                    '<pre class="brush: plain; title: ; notranslate" title="">','&lt;code&gt;',
                                    '</pre>','</code>'
                                ];
    
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('3 q=\'.W\';3 1a=$(\'#N-Y\').B(\'y\');u 1w(H){3 1h=\' \\n\\r\\t\\f\\2p\\1S\\1T\\1U\\24\\25\\26\\27\\2e\\2h\\2k\\2m\\2n\\2u\\2y\\2z\\2A\\2F\\1L\\1N\\1O\\1P\\1Q\';G(3 i=0;i<H.5;i++){b(1h.g(H.1V(i))!=-1){H=H.d(0,i);11}}C H}$(\'#28 .1B p\').k(u(D,7){b(2r){3 m=\'1g://13.Z.X/1t?v=\';3 8=7.g(m);F(8!=-1){1H=7.d(8);K=1w(1H);3 1c=K.g(\'&\');3 T=\'\';b(1c==-1){T=K.d(m.5)}1e{T=K.d(m.5,1c)}3 1j=\'<1k I="1W" y="1g://13.Z.X/1X/\'+T+\'?1Y=1" 20="0" 21></1k>\';7=7.d(0,8)+1j+7.d(8+K.5);8=7.g(m);b(8==-1){m=\'22://13.Z.X/1t?v=\';8=7.g(m)}}}b(23){3 1d=\'\';3 x=7;G(3 i=0;i<1z.5;i++){3 m=\'.\'+1z[i];3 o=x.E();3 8=o.g(m);F(8!=-1){l=x.d(0,8+m.5);o=l.E();3 w=\'2j://\';3 z=o.g(w);3 L=\'\';F(z!=-1){L=w.R();l=l.d(z+w.5);o=l.E();z=o.g(w)}w=\'1K://\';o=l.E();z=o.g(w);F(z!=-1){L=w.R();l=l.d(z+w.5);o=l.E();z=o.g(w)}b(L==\'\'||l.5<6){11}l=L+l;1d+=x.d(0,8+m.5-l.5)+\'<S y="\'+l+\'" I="2s"/>\';x=x.d(8+m.5);o=x.E();8=o.g(m)}}7=1d+x}b(1m){3 5=A.5;b(5%2==1){5--}G(3 i=0;i<5;i+=2){3 V=\'<S y="\'+A[i+1]+\'" I="1x"/>\';8=7.g(A[i]);F(8!=-1){7=7.d(0,8)+V+7.d(8+A[i].5);8=7.g(A[i])}}}b(2G){3 5=U.5;b(5%2==1){5--}G(3 i=0;i<5;i+=2){F(1){3 x=7.R();8=x.g(U[i]);b(8!=-1){7=7.d(0,8)+U[i+1]+7.d(8+U[i].5)}1e{11}}}}C 7});$(\'.1M\').k(u(D,7){b(1m){3 5=A.5;b(5%2==1){5--}3 15=\'\';G(3 i=0;i<5;i+=2){3 1C=\'<1F>\'+A[i]+\'</1F>\';3 V=\'<S y="\'+A[i+1]+\'" I="1x"/>\';15+=\'<M I="1R">\'+V+1C+\'</M>\'}C 15}});$(\'.1f .1B p\').k(u(i,h){10=h.R();D=10.g(\'@<a 12="#c\');b(D!=-1){14=10.g(\'</a>\',D);b(14!=-1){h=h.d(0,D)+h.d(14+4)}}C h});u 1l(j){r=j.g(\'c\');b(r!=-1)j=j.d(r+1);C j}u 1n(j){j=\'&1Z=\'+j+\'#%1o\';1p=1a.1q(/#%1o/,j);C 1p}u 1r(){k=$(q).k();$(q).k(\'\');q=\'.W\';$(q).k(k);$(\'#N-Y\').B(\'y\',1a)}u 1s(e){j=$(e).B(\'16\');j=1l(j);k=$(q).k();b(q==\'.W\'){1u=\'<a 12="#1v" 29="1r()">\'+2a.2b+\'</a><a 2c="1v"/>\';$(q).k(1u)}1e{$(q).k(\'\')}q=\'#2d\'+j;$(q).k(k);$(\'#N-Y\').B(\'y\',1n(j))}17=2f.2g.12;18=\'#N-2i\';19=17.g(18);b(19!=-1){1y=17.d(19+18.5);1s(\'#2l\'+1y)}G(3 i=0;i<O.5;i++){b(\'1A\'2o O[i]){3 j=O[i].1A;3 1b=2q($(\'#c\'+j+\':P\').B(\'1D-1E\'));$(\'#c\'+j+\' .2t:P\').k(u(D,7){3 J=O[i].16;b(1b>=2v.2w){$(\'#c\'+J+\':P .2x\').1G()}3 Q=$(\'#c\'+J+\':P\').k();Q=\'<M I="1f" 16="c\'+J+\'" 1D-1E="\'+(1b+1)+\'">\'+Q+\'</M>\';$(\'#c\'+J).1G();C(7+Q)})}}3 1I=$("#2B");1I.2C(\'.2D S\').2E(u(){3 1J=$(1i).B(\'y\');$(1i).2H().B(\'y\',1J.1q(/\\/s[0-9]+(\\-c)?\\//,"/2I-c/"))});',62,169,'|||var||length||oldhtml|check_index|||if||substring|||indexOf|||par_id|html|img_src|search_key||upper_html||Cur_Cform_Hdr||||function||http_search|temp_html|src|find_http|Emo_List|attr|return|index|toUpperCase|while|for|str|class|child_id|yt_link|save_http|div|comment|Items|first|child_html|toLowerCase|img|yt_code|Force_Tag|img_html|comment_form|com|editor|youtube|temp|break|href|www|index_tail|newhtml|id|cur_url|search_formid|search_index|Cur_Cform_Url|par_level|yt_code_index|save_html|else|comment_wrap|http|whitespace|this|yt_video|iframe|Valid_Par_Id|Display_Emo|Cform_Ins_ParID|7B|n_cform_url|replace|Reset_Comment_Form|Display_Reply_Form|watch|reset_html|origin_cform|trim|comment_emo|ret_id|Replace_Image_Ext|parentId|comment_body|img_code|data|level|span|remove|ht|avatar|ava|HTTPS|u200a|comment_emo_list|u200b|u2028|u2029|u3000|item|x5d|x7c|x7d|charAt|comment_youtube|embed|autohide|parentID|frameborder|allowfullscreen|https|Replace_Image_Link|x3c|x3e|x0b|xa0|comment_block|onclick|Msgs|addComment|name|r_f_c|u2000|window|location|u2001|form_|HTTP|u2002|rc|u2003|u2004|in|x5b|parseInt|Replace_Youtube_Link|comment_img|comment_child|u2005|Config|maxThreadDepth|comment_reply|u2006|u2007|u2008|comments|find|comment_avatar|each|u2009|Replace_Force_Tag|show|s45'.split('|'),0,{}))
    //]]>
</script>
</b:includable>

nitip//
&lt;script type=&quot;text/javascript&quot;&gt;
    function setAttributeOnload(object, attribute, val) {
      if(window.addEventListener) {
        window.addEventListener(&#39;load&#39;,
          function(){ object[attribute] = val; }, false);
      } else {
        window.attachEvent(&#39;onload&#39;, function(){ object[attribute] = val; });
      }
    }
  &lt;/script&gt;
&lt;div id=&quot;navbar-iframe-container&quot;&gt;&lt;/div&gt;
&lt;script type=&quot;text/javascript&quot; src=&quot;https://apis.google.com/js/plusone.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
      gapi.load(&quot;gapi.iframes:gapi.iframes.style.bubble&quot;, function() {
        if (gapi.iframes &amp;&amp; gapi.iframes.getContext) {
          gapi.iframes.getContext().openChild({
              url: &#39;https://www.blogger.com/navbar.g?targetBlogID\x3d1690833678185910338\x26blogName\x3dCode+Doctor\x26publishMode\x3dPUBLISH_MODE_HOSTED\x26navbarType\x3dBLUE\x26layoutType\x3dLAYOUTS\x26searchRoot\x3dhttp://www.codedoct.com/search\x26blogLocale\x3den_GB\x26v\x3d2\x26homepageUrl\x3dhttp://www.codedoct.com/\x26vt\x3d-4322745972091072599&#39;,
              where: document.getElementById(&quot;navbar-iframe-container&quot;),
              id: &quot;navbar-iframe&quot;
          });
        }
      });
    &lt;/script&gt;&lt;script type=&quot;text/javascript&quot;&gt;
(function() {
var script = document.createElement(&#39;script&#39;);
script.type = &#39;text/javascript&#39;;
script.src = &#39;//pagead2.googlesyndication.com/pagead/js/google_top_exp.js&#39;;
var head = document.getElementsByTagName(&#39;head&#39;)[0];
if (head) {
head.appendChild(script);
}})();
&lt;/script&gt;

//edit ini
<h3 class='post-title entry-title' itemprop='name'>
//menjadi
<h3 class='post-title entry-title' itemprop='headline'>

//dibawah ini
<body
//tambah ini
<div class='header-wrapper' itemprop='publisher' itemscope='' itemtype='https://schema.org/Organization'> <meta content='Taurenidus' itemprop='name'/></div>
//dibawah ini
<!--No header image -->
//tambah ini
<span itemprop='logo' itemscope='' itemtype='https://schema.org/ImageObject'> <img alt='Codedoct.com' height='97px; ' id='Header1_headerimg' src='https://www.googledrive.com/host/0B5T4iWb6kwdOZ2hhZ3o5ZkRRMm8' style='display: none' width='376px; '/> <meta content='https://www.googledrive.com/host/0B5T4iWb6kwdOZ2hhZ3o5ZkRRMm8' itemprop='url'/> <meta content='376px; ' itemprop='width'/> <meta content='97px; ' itemprop='height'/> </span>

//date modified
//dari
<a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished'><data:post.timestamp/></abbr></a>
//menjadi
<span itemprop='dateModified'><a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'><abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished'><data:post.timestamp/></abbr></a></span>

//edit itemprop='image'
<meta expr:content='data:post.thumbnailUrl' itemprop='image'/>
//menjadi
<meta expr:content='data:post.thumbnailUrl'/>
//ini juga
<meta expr:content='data:post.firstImageUrl' itemprop='image'/>
//menjadi
<meta expr:content='data:post.firstImageUrl'/>
//ini juga
<img expr:src='data:post.authorPhoto.url' itemprop='image' width='50px'/>
//menjadi
<img expr:src='data:post.authorPhoto.url' width='50px'/>

//tambah ini jugag
<div itemType='https://schema.org/WebPage' itemprop='mainEntityOfPage' itemscope='itemscope'/>
  <b:if cond='data:post.firstImageUrl'>
    <div itemprop='image' itemscope='itemscope' itemtype='https://schema.org/ImageObject'>
        <meta expr:content='data:post.firstImageUrl' itemprop='url'/>
        <meta content='600' itemprop='width'/>
        <meta content='300' itemprop='height'/>
      </div>
      </b:if>
  <div itemprop='publisher' itemscope='itemscope' itemtype='https://schema.org/Organization'>
        <div itemprop='logo' itemscope='itemscope' itemtype='https://schema.org/ImageObject'>
            <meta content='http://lh6.googleusercontent.com/-ZGbeBLr0onM/AAAAAAAAAAI/AAAAAAAAACw/w5oHY9ltBPY/s512-c/photo.jpg' itemprop='url'/>
            <meta content='300' itemprop='width'/>
            <meta content='300' itemprop='height'/>
      </div>
      <meta expr:content='data:blog.title' itemprop='name'/>
</div>


