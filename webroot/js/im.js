function loadScript(url, callback) {
  var script = document.createElement("script");
  script.type = "text/javascript";
  if(typeof(callback) != "undefined"){
    if (script.readyState) {
      script.onreadystatechange = function () {
        if (script.readyState == "loaded" || script.readyState == "complete") {
          script.onreadystatechange = null;
          callback();
        }
      };
    } else {
      script.onload = function () {
        callback();
      };
    }
  }
  script.src = url;
  document.body.appendChild(script);
}


if (typeof Vue == "undefined") {
  loadScript("https://cdn.jsdelivr.net/npm/vue",function(){xunIm.init()});
}else{
  xunIm.init()
}

var xunIm ={
  init :function(){
    //引入css
    var head = document.getElementsByTagName('HEAD').item(0);
    var style = document.createElement('link');
    style.href = 'css/im.css';
    style.rel = 'stylesheet';
    style.type = 'text/css';
    head.appendChild(style);

    //原来内容div，改变样式
    document.getElementById("y").style.float="left";
    //创建im_Main
    var div = document.createElement("div");  
    var divattr = document.createAttribute("id");  
    divattr.value = "im_Main";
    div.setAttributeNode(divattr);
    div.innerHTML ='<button type="button" @click="im_Nav">Click Me!</button>'
    document.getElementsByTagName("body").item(0).appendChild(div);

    xunIm.App = new Vue({
        el: '#im_Main',
        data: {
          message: 'Hello Vue.js!',
          im_open:false,
        },
        methods: {
          im_Nav:function(){
            if(this.im_open){
              document.getElementById("im_Main").style.width='50px'
            }else{
              document.getElementById("im_Main").style.width='200px'
            }
            this.im_open = !this.im_open;
          }
        }
    })
  }
}