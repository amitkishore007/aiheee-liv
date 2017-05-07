window.CoolClock=function(a){return this.init(a)},CoolClock.config={tickDelay:1e3,longTickDelay:15e3,defaultRadius:85,renderRadius:100,defaultSkin:"chunkySwiss",showSecs:!0,showAmPm:!0,skins:{swissRail:{outerBorder:{lineWidth:2,radius:95,color:"black",alpha:1},smallIndicator:{lineWidth:2,startAt:88,endAt:92,color:"black",alpha:1},largeIndicator:{lineWidth:4,startAt:79,endAt:92,color:"black",alpha:1},hourHand:{lineWidth:8,startAt:-15,endAt:50,color:"black",alpha:1},minuteHand:{lineWidth:7,startAt:-15,endAt:75,color:"black",alpha:1},secondHand:{lineWidth:1,startAt:-20,endAt:85,color:"red",alpha:1},secondDecoration:{lineWidth:1,startAt:70,radius:4,fillColor:"red",color:"red",alpha:1}},chunkySwiss:{outerBorder:{lineWidth:4,radius:97,color:"black",alpha:1},smallIndicator:{lineWidth:4,startAt:89,endAt:93,color:"black",alpha:1},largeIndicator:{lineWidth:8,startAt:80,endAt:93,color:"black",alpha:1},hourHand:{lineWidth:12,startAt:-15,endAt:60,color:"black",alpha:1},minuteHand:{lineWidth:10,startAt:-15,endAt:85,color:"black",alpha:1},secondHand:{lineWidth:4,startAt:-20,endAt:85,color:"red",alpha:1},secondDecoration:{lineWidth:2,startAt:70,radius:8,fillColor:"red",color:"red",alpha:1}},chunkySwissOnBlack:{outerBorder:{lineWidth:4,radius:97,color:"white",alpha:1},smallIndicator:{lineWidth:4,startAt:89,endAt:93,color:"white",alpha:1},largeIndicator:{lineWidth:8,startAt:80,endAt:93,color:"white",alpha:1},hourHand:{lineWidth:12,startAt:-15,endAt:60,color:"white",alpha:1},minuteHand:{lineWidth:10,startAt:-15,endAt:85,color:"white",alpha:1},secondHand:{lineWidth:4,startAt:-20,endAt:85,color:"red",alpha:1},secondDecoration:{lineWidth:2,startAt:70,radius:8,fillColor:"red",color:"red",alpha:1}},oakleafClock:{outerBorder:{lineWidth:5,radius:95,color:"white",alpha:.5},smallIndicator:{lineWidth:2,startAt:88,endAt:92,color:"black",alpha:0},largeIndicator:{lineWidth:4,startAt:79,endAt:92,color:"black",alpha:0},hourHand:{lineWidth:6,startAt:-15,endAt:50,color:"white",alpha:1},minuteHand:{lineWidth:6,startAt:-15,endAt:75,color:"white",alpha:1},secondHand:{lineWidth:3,startAt:-20,endAt:85,color:"white",alpha:.5},secondDecoration:{lineWidth:1,startAt:70,radius:4,fillColor:"red",color:"red",alpha:0}}},isIE:!!document.all,clockTracker:{},noIdCount:0},CoolClock.prototype={init:function(a){return this.canvasId=a.canvasId,this.skinId=a.skinId||CoolClock.config.defaultSkin,this.displayRadius=a.displayRadius||CoolClock.config.defaultRadius,this.showSecondHand="boolean"!=typeof a.showSecondHand||a.showSecondHand,this.gmtOffset=null!=a.gmtOffset&&""!=a.gmtOffset?parseFloat(a.gmtOffset):null,this.showDigital="boolean"==typeof a.showDigital&&a.showDigital,this.logClock="boolean"==typeof a.logClock&&a.logClock,this.logClockRev="boolean"==typeof a.logClock&&a.logClockRev,this.tickDelay=CoolClock.config[this.showSecondHand?"tickDelay":"longTickDelay"],this.canvas=document.getElementById(this.canvasId),this.canvas.setAttribute("width",2*this.displayRadius),this.canvas.setAttribute("height",2*this.displayRadius),this.canvas.style.width=2*this.displayRadius+"px",this.canvas.style.height=2*this.displayRadius+"px",this.renderRadius=CoolClock.config.renderRadius,this.scale=this.displayRadius/this.renderRadius,this.ctx=this.canvas.getContext("2d"),this.ctx.scale(this.scale,this.scale),CoolClock.config.clockTracker[this.canvasId]=this,this.tick(),this},fullCircleAt:function(a,b,c){this.ctx.save(),this.ctx.globalAlpha=c.alpha,this.ctx.lineWidth=c.lineWidth,CoolClock.config.isIE||this.ctx.beginPath(),CoolClock.config.isIE&&(this.ctx.lineWidth=this.ctx.lineWidth*this.scale),this.ctx.arc(a,b,c.radius,0,2*Math.PI,!1),CoolClock.config.isIE&&this.ctx.arc(a,b,c.radius,-.1,.1,!1),c.fillColor?(this.ctx.fillStyle=c.fillColor,this.ctx.fill()):(this.ctx.strokeStyle=c.color,this.ctx.stroke()),this.ctx.restore()},drawTextAt:function(a,b,c){this.ctx.save(),this.ctx.font="15px sans-serif";var d=this.ctx.measureText(a);d.height||(d.height=15),this.ctx.fillText(a,b-d.width/2,c-d.height/2),this.ctx.restore()},lpad2:function(a){return(a<10?"0":"")+a},tickAngle:function(a){var b=3;return this.logClock?0==a?0:Math.log(a*b)/Math.log(60*b):this.logClockRev?(a=(60-a)%60,1-(0==a?0:Math.log(a*b)/Math.log(60*b))):a/60},timeText:function(a,b,c){var d=CoolClock.config;return""+(d.showAmPm?a%12==0?12:a%12:a)+":"+this.lpad2(b)+(d.showSecs?":"+this.lpad2(c):"")+(d.showAmPm?a<12?" am":" pm":"")},radialLineAtAngle:function(a,b){this.ctx.save(),this.ctx.translate(this.renderRadius,this.renderRadius),this.ctx.rotate(Math.PI*(2*a-.5)),this.ctx.globalAlpha=b.alpha,this.ctx.strokeStyle=b.color,this.ctx.lineWidth=b.lineWidth,CoolClock.config.isIE&&(this.ctx.lineWidth=this.ctx.lineWidth*this.scale),b.radius?this.fullCircleAt(b.startAt,0,b):(this.ctx.beginPath(),this.ctx.moveTo(b.startAt,0),this.ctx.lineTo(b.endAt,0),this.ctx.stroke()),this.ctx.restore()},render:function(a,b,c){var d=CoolClock.config.skins[this.skinId];d||(d=CoolClock.config.skins[CoolClock.config.defaultSkin]),this.ctx.clearRect(0,0,2*this.renderRadius,2*this.renderRadius),d.outerBorder&&this.fullCircleAt(this.renderRadius,this.renderRadius,d.outerBorder);for(var e=0;e<60;e++)e%5&&d.smallIndicator&&this.radialLineAtAngle(this.tickAngle(e),d.smallIndicator),!(e%5)&&d.largeIndicator&&this.radialLineAtAngle(this.tickAngle(e),d.largeIndicator);this.showDigital&&this.drawTextAt(this.timeText(a,b,c),this.renderRadius,this.renderRadius+this.renderRadius/2),d.hourHand&&this.radialLineAtAngle(this.tickAngle(a%12*5+b/12),d.hourHand),d.minuteHand&&this.radialLineAtAngle(this.tickAngle(b+c/60),d.minuteHand),this.showSecondHand&&d.secondHand&&this.radialLineAtAngle(this.tickAngle(c),d.secondHand),!CoolClock.config.isIE&&this.showSecondHand&&d.secondDecoration&&this.radialLineAtAngle(this.tickAngle(c),d.secondDecoration)},refreshDisplay:function(){var a=new Date;if(null!=this.gmtOffset){var b=new Date(a.valueOf()+1e3*this.gmtOffset*60*60);this.render(b.getUTCHours(),b.getUTCMinutes(),b.getUTCSeconds())}else this.render(a.getHours(),a.getMinutes(),a.getSeconds())},nextTick:function(){setTimeout("CoolClock.config.clockTracker['"+this.canvasId+"'].tick()",this.tickDelay)},stillHere:function(){return null!=document.getElementById(this.canvasId)},tick:function(){this.stillHere()&&(this.refreshDisplay(),this.nextTick())}},CoolClock.findAndCreateClocks=function(){for(var a=document.getElementsByTagName("canvas"),b=0;b<a.length;b++){var c=a[b].className.split(" ")[0].split(":");"CoolClock"==c[0]&&(a[b].id||(a[b].id="_coolclock_auto_id_"+CoolClock.config.noIdCount++),new CoolClock({canvasId:a[b].id,skinId:c[1],displayRadius:c[2],showSecondHand:"noSeconds"!=c[3],gmtOffset:c[4],showDigital:"showDigital"==c[5],logClock:"logClock"==c[6],logClockRev:"logClockRev"==c[6]}))}},window.jQuery&&jQuery(document).ready(CoolClock.findAndCreateClocks),window.CanvasRenderingContext2D||!function(){function a(a){var b=a.srcElement;switch(a.propertyName){case"width":b.style.width=b.attributes.width.nodeValue+"px",b.getContext().clearRect();break;case"height":b.style.height=b.attributes.height.nodeValue+"px",b.getContext().clearRect()}}function b(a){var b=a.srcElement;b.firstChild&&(b.firstChild.style.width=b.clientWidth+"px",b.firstChild.style.height=b.clientHeight+"px")}function c(){return[[1,0,0],[0,1,0],[0,0,1]]}function d(a,b){for(var d=c(),e=0;e<3;e++)for(var f=0;f<3;f++){for(var g=0,h=0;h<3;h++)g+=a[e][h]*b[h][f];d[e][f]=g}return d}function e(a,b){b.fillStyle=a.fillStyle,b.lineCap=a.lineCap,b.lineJoin=a.lineJoin,b.lineWidth=a.lineWidth,b.miterLimit=a.miterLimit,b.shadowBlur=a.shadowBlur,b.shadowColor=a.shadowColor,b.shadowOffsetX=a.shadowOffsetX,b.shadowOffsetY=a.shadowOffsetY,b.strokeStyle=a.strokeStyle,b.arcScaleX_=a.arcScaleX_,b.arcScaleY_=a.arcScaleY_}function f(a){var b,c=1;if(a=String(a),"rgb"==a.substring(0,3)){var d=a.indexOf("(",3),e=a.indexOf(")",d+1),f=a.substring(d+1,e).split(",");b="#";for(var g=0;g<3;g++)b+=r[Number(f[g])];4==f.length&&"a"==a.substr(3,1)&&(c=f[3])}else b=a;return[b,c]}function g(a){switch(a){case"butt":return"flat";case"round":return"round";case"square":default:return"square"}}function h(a){this.m_=c(),this.mStack_=[],this.aStack_=[],this.currentPath_=[],this.strokeStyle="#000",this.fillStyle="#000",this.lineWidth=1,this.lineJoin="miter",this.lineCap="butt",this.miterLimit=1*o,this.globalAlpha=1,this.canvas=a;var b=a.ownerDocument.createElement("div");b.style.width=a.clientWidth+"px",b.style.height=a.clientHeight+"px",b.style.overflow="hidden",b.style.position="absolute",a.appendChild(b),this.element_=b,this.arcScaleX_=1,this.arcScaleY_=1}function i(a){this.type_=a,this.radius1_=0,this.radius2_=0,this.colors_=[],this.focus_={x:0,y:0}}function j(){}var k=Math,l=k.round,m=k.sin,n=k.cos,o=10,p=o/2,q={init:function(a){var b=a||document;if(/MSIE/.test(navigator.userAgent)&&!window.opera){var c=this;b.attachEvent("onreadystatechange",function(){c.init_(b)})}},init_:function(a){if("complete"==a.readyState){a.namespaces.g_vml_||a.namespaces.add("g_vml_","urn:schemas-microsoft-com:vml");var b=a.createStyleSheet();b.cssText="canvas{display:inline-block;overflow:hidden;text-align:left;width:300px;height:150px}g_vml_\\:*{behavior:url(#default#VML)}";for(var c=a.getElementsByTagName("canvas"),d=0;d<c.length;d++)c[d].getContext||this.initElement(c[d])}},fixElement_:function(a){var b=a.outerHTML,c=a.ownerDocument.createElement(b);if("/>"!=b.slice(-2)){for(var d,e="/"+a.tagName;(d=a.nextSibling)&&d.tagName!=e;)d.removeNode();d&&d.removeNode()}return a.parentNode.replaceChild(c,a),c},initElement:function(c){c=this.fixElement_(c),c.getContext=function(){return this.context_?this.context_:this.context_=new h(this)},c.attachEvent("onpropertychange",a),c.attachEvent("onresize",b);var d=c.attributes;return d.width&&d.width.specified?c.style.width=d.width.nodeValue+"px":c.width=c.clientWidth,d.height&&d.height.specified?c.style.height=d.height.nodeValue+"px":c.height=c.clientHeight,c}};q.init();for(var r=[],s=0;s<16;s++)for(var t=0;t<16;t++)r[16*s+t]=s.toString(16)+t.toString(16);var u=h.prototype;u.clearRect=function(){this.element_.innerHTML="",this.currentPath_=[]},u.beginPath=function(){this.currentPath_=[]},u.moveTo=function(a,b){this.currentPath_.push({type:"moveTo",x:a,y:b}),this.currentX_=a,this.currentY_=b},u.lineTo=function(a,b){this.currentPath_.push({type:"lineTo",x:a,y:b}),this.currentX_=a,this.currentY_=b},u.bezierCurveTo=function(a,b,c,d,e,f){this.currentPath_.push({type:"bezierCurveTo",cp1x:a,cp1y:b,cp2x:c,cp2y:d,x:e,y:f}),this.currentX_=e,this.currentY_=f},u.quadraticCurveTo=function(a,b,c,d){var e=this.currentX_+2/3*(a-this.currentX_),f=this.currentY_+2/3*(b-this.currentY_),g=e+(c-this.currentX_)/3,h=f+(d-this.currentY_)/3;this.bezierCurveTo(e,f,g,h,c,d)},u.arc=function(a,b,c,d,e,f){c*=o;var g=f?"at":"wa",h=a+n(d)*c-p,i=b+m(d)*c-p,j=a+n(e)*c-p,k=b+m(e)*c-p;h!=j||f||(h+=.125),this.currentPath_.push({type:g,x:a,y:b,radius:c,xStart:h,yStart:i,xEnd:j,yEnd:k})},u.rect=function(a,b,c,d){this.moveTo(a,b),this.lineTo(a+c,b),this.lineTo(a+c,b+d),this.lineTo(a,b+d),this.closePath()},u.strokeRect=function(a,b,c,d){this.beginPath(),this.moveTo(a,b),this.lineTo(a+c,b),this.lineTo(a+c,b+d),this.lineTo(a,b+d),this.closePath(),this.stroke()},u.fillRect=function(a,b,c,d){this.beginPath(),this.moveTo(a,b),this.lineTo(a+c,b),this.lineTo(a+c,b+d),this.lineTo(a,b+d),this.closePath(),this.fill()},u.createLinearGradient=function(a,b,c,d){var e=new i("gradient");return e},u.createRadialGradient=function(a,b,c,d,e,f){var g=new i("gradientradial");return g.radius1_=c,g.radius2_=f,g.focus_.x=a,g.focus_.y=b,g},u.drawImage=function(a,b){var c,d,e,f,g,h,i,j,k=a.runtimeStyle.width,m=a.runtimeStyle.height;a.runtimeStyle.width="auto",a.runtimeStyle.height="auto";var n=a.width,p=a.height;if(a.runtimeStyle.width=k,a.runtimeStyle.height=m,3==arguments.length)c=arguments[1],d=arguments[2],g=h=0,i=e=n,j=f=p;else if(5==arguments.length)c=arguments[1],d=arguments[2],e=arguments[3],f=arguments[4],g=h=0,i=n,j=p;else{if(9!=arguments.length)throw"Invalid number of arguments";g=arguments[1],h=arguments[2],i=arguments[3],j=arguments[4],c=arguments[5],d=arguments[6],e=arguments[7],f=arguments[8]}var q=this.getCoords_(c,d),r=[],s=10,t=10;if(r.push(" <g_vml_:group",' coordsize="',o*s,",",o*t,'"',' coordorigin="0,0"',' style="width:',s,";height:",t,";position:absolute;"),1!=this.m_[0][0]||this.m_[0][1]){var u=[];u.push("M11='",this.m_[0][0],"',","M12='",this.m_[1][0],"',","M21='",this.m_[0][1],"',","M22='",this.m_[1][1],"',","Dx='",l(q.x/o),"',","Dy='",l(q.y/o),"'");var v=q,w=this.getCoords_(c+e,d),x=this.getCoords_(c,d+f),y=this.getCoords_(c+e,d+f);v.x=Math.max(v.x,w.x,x.x,y.x),v.y=Math.max(v.y,w.y,x.y,y.y),r.push("padding:0 ",l(v.x/o),"px ",l(v.y/o),"px 0;filter:progid:DXImageTransform.Microsoft.Matrix(",u.join(""),", sizingmethod='clip');")}else r.push("top:",l(q.y/o),"px;left:",l(q.x/o),"px;");r.push(' ">','<g_vml_:image src="',a.src,'"',' style="width:',o*e,";"," height:",o*f,';"',' cropleft="',g/n,'"',' croptop="',h/p,'"',' cropright="',(n-g-i)/n,'"',' cropbottom="',(p-h-j)/p,'"'," />","</g_vml_:group>"),this.element_.insertAdjacentHTML("BeforeEnd",r.join(""))},u.stroke=function(a){var b=[],c=f(a?this.fillStyle:this.strokeStyle),d=c[0],e=c[1]*this.globalAlpha,h=10,i=10;b.push("<g_vml_:shape",' fillcolor="',d,'"',' filled="',Boolean(a),'"',' style="position:absolute;width:',h,";height:",i,';"',' coordorigin="0 0" coordsize="',o*h," ",o*i,'"',' stroked="',!a,'"',' strokeweight="',this.lineWidth,'"',' strokecolor="',d,'"',' path="');for(var j={x:null,y:null},k={x:null,y:null},m=0;m<this.currentPath_.length;m++){var n=this.currentPath_[m];if("moveTo"==n.type){b.push(" m ");var p=this.getCoords_(n.x,n.y);b.push(l(p.x),",",l(p.y))}else if("lineTo"==n.type){b.push(" l ");var p=this.getCoords_(n.x,n.y);b.push(l(p.x),",",l(p.y))}else if("close"==n.type)b.push(" x ");else if("bezierCurveTo"==n.type){b.push(" c ");var p=this.getCoords_(n.x,n.y),q=this.getCoords_(n.cp1x,n.cp1y),r=this.getCoords_(n.cp2x,n.cp2y);b.push(l(q.x),",",l(q.y),",",l(r.x),",",l(r.y),",",l(p.x),",",l(p.y))}else if("at"==n.type||"wa"==n.type){b.push(" ",n.type," ");var p=this.getCoords_(n.x,n.y),s=this.getCoords_(n.xStart,n.yStart),t=this.getCoords_(n.xEnd,n.yEnd);b.push(l(p.x-this.arcScaleX_*n.radius),",",l(p.y-this.arcScaleY_*n.radius)," ",l(p.x+this.arcScaleX_*n.radius),",",l(p.y+this.arcScaleY_*n.radius)," ",l(s.x),",",l(s.y)," ",l(t.x),",",l(t.y))}p&&((null==j.x||p.x<j.x)&&(j.x=p.x),(null==k.x||p.x>k.x)&&(k.x=p.x),(null==j.y||p.y<j.y)&&(j.y=p.y),(null==k.y||p.y>k.y)&&(k.y=p.y))}if(b.push(' ">'),"object"==typeof this.fillStyle){var u={x:"50%",y:"50%"},v=k.x-j.x,w=k.y-j.y,x=v>w?v:w;u.x=l(this.fillStyle.focus_.x/v*100+50)+"%",u.y=l(this.fillStyle.focus_.y/w*100+50)+"%";var y=[];if("gradientradial"==this.fillStyle.type_)var z=this.fillStyle.radius1_/x*100,A=this.fillStyle.radius2_/x*100-z;else var z=0,A=100;var B={offset:null,color:null},C={offset:null,color:null};this.fillStyle.colors_.sort(function(a,b){return a.offset-b.offset});for(var m=0;m<this.fillStyle.colors_.length;m++){var D=this.fillStyle.colors_[m];y.push(D.offset*A+z,"% ",D.color,","),(D.offset>B.offset||null==B.offset)&&(B.offset=D.offset,B.color=D.color),(D.offset<C.offset||null==C.offset)&&(C.offset=D.offset,C.color=D.color)}y.pop(),b.push("<g_vml_:fill",' color="',C.color,'"',' color2="',B.color,'"',' type="',this.fillStyle.type_,'"',' focusposition="',u.x,", ",u.y,'"',' colors="',y.join(""),'"',' opacity="',e,'" />')}else a?b.push('<g_vml_:fill color="',d,'" opacity="',e,'" />'):b.push("<g_vml_:stroke",' opacity="',e,'"',' joinstyle="',this.lineJoin,'"',' miterlimit="',this.miterLimit,'"',' endcap="',g(this.lineCap),'"',' weight="',this.lineWidth,'px"',' color="',d,'" />');b.push("</g_vml_:shape>"),this.element_.insertAdjacentHTML("beforeEnd",b.join("")),this.currentPath_=[]},u.fill=function(){this.stroke(!0)},u.closePath=function(){this.currentPath_.push({type:"close"})},u.getCoords_=function(a,b){return{x:o*(a*this.m_[0][0]+b*this.m_[1][0]+this.m_[2][0])-p,y:o*(a*this.m_[0][1]+b*this.m_[1][1]+this.m_[2][1])-p}},u.save=function(){var a={};e(this,a),this.aStack_.push(a),this.mStack_.push(this.m_),this.m_=d(c(),this.m_)},u.restore=function(){e(this.aStack_.pop(),this),this.m_=this.mStack_.pop()},u.translate=function(a,b){var c=[[1,0,0],[0,1,0],[a,b,1]];this.m_=d(c,this.m_)},u.rotate=function(a){var b=n(a),c=m(a),e=[[b,c,0],[-c,b,0],[0,0,1]];this.m_=d(e,this.m_)},u.scale=function(a,b){this.arcScaleX_*=a,this.arcScaleY_*=b;var c=[[a,0,0],[0,b,0],[0,0,1]];this.m_=d(c,this.m_)},u.clip=function(){},u.arcTo=function(){},u.createPattern=function(){return new j},i.prototype.addColorStop=function(a,b){b=f(b),this.colors_.push({offset:1-a,color:b})},G_vmlCanvasManager=q,CanvasRenderingContext2D=h,CanvasGradient=i,CanvasPattern=j}();