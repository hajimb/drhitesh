'use strict';(function($){$.pwstrength=function(password){let score=0;const symbols='[!,@,#,$,%,^,&,*,?,_,~]';let check=new RegExp('('+symbols+')');let doublecheck=new RegExp('('+'.*'+symbols+'.*'+symbols+')');score+=password.length*4;score+=checkRepetition(1,password).length-password.length;score+=checkRepetition(2,password).length-password.length;score+=checkRepetition(3,password).length-password.length;score+=checkRepetition(4,password).length-password.length;if(password.match(/(.*[0-9].*[0-9].*[0-9])/)){score+=5;}
if(password.match(doublecheck)){score+=5;}
if(password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)){score+=10;}
if(password.match(/([a-zA-Z])/)&&password.match(/([0-9])/)){score+=15;}
if(password.match(check)&&password.match(/([0-9])/)){score+=15;}
if(password.match(check)&&password.match(/([a-zA-Z])/)){score+=15;}
if(password.match(/^\w+$/)||password.match(/^\d+$/)){score-=10;}
return Math.floor(Math.max(Math.min(score,99),0)/ 20);};function checkRepetition(rLen,str){let res='';let repeated=false;for(let i=0;i<str.length;i++){repeated=true;let j;for(j=0;j<rLen&&(j+i+rLen)<str.length;j++){repeated=repeated&&(str.charAt(j+i)===str.charAt(j+i+rLen));}
if(j<rLen){repeated=false;}
if(repeated){i+=rLen-1;repeated=false;}else{res+=str.charAt(i);}}
return res;}
function updateIndicator(event){let strength=$.pwstrength($(event.currentTarget).val());let options=event.data;let klass=options.classes[strength];options.indicator.removeClass(options.indicator.data('pwclass'));options.indicator.data('pwclass',klass);options.indicator.addClass(klass);options.indicator.find(options.label).html(options.texts[strength]);}
$.fn.pwstrength=function(options){options=$.extend({label:'.label',classes:['pw-very-weak','pw-weak','pw-mediocre','pw-strong','pw-very-strong'],texts:['very weak','weak','mediocre','strong','very strong']},options||{});options.indicator=$('#'+this.data('indicator'));return this.on('keyup',options,updateIndicator);};})(jQuery);