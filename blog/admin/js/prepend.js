'use strict';function getData(id,clear=true,remove=false){let data={};const element=document.getElementById(`${id}-data`);if(element){try{data=JSON.parse(element.textContent);if(remove){element.remove();}else if(clear){element.innerHTML='';}}catch(e){}}
return data;}
function isObject(item){return(item&&typeof item==='object'&&!Array.isArray(item));}
function mergeDeep(target,...sources){if(!sources.length)return target;const source=sources.shift();if(isObject(target)&&isObject(source)){for(const key in source){if(isObject(source[key])){if(!target[key])Object.assign(target,{[key]:{}});mergeDeep(target[key],source[key]);}else{Object.assign(target,{[key]:source[key]});}}}
return mergeDeep(target,...sources);}
function trimHtml(html,options){options=options||{};let limit=options.limit||100;let preserveTags=(typeof options.preserveTags!=='undefined')?options.preserveTags:true;let wordBreak=(typeof options.wordBreak!=='undefined')?options.wordBreak:false;let suffix=options.suffix||'...';let moreLink=options.moreLink||'';let arr=html.replace(/</g,"\n<").replace(/>/g,">\n").replace(/\n\n/g,"\n").replace(/^\n/g,"").replace(/\n$/g,"").split("\n");let sum=0;let row;let cut;let add;let tagMatch;let tagName;let tagStack=[];let more=false;let rowCut;for(let i=0;i<arr.length;i++){row=arr[i];rowCut=row.replace(/[ ]+/g,' ');if(!row.length){continue;}
if(row[0]!=="<"){if(sum>=limit){row="";}else if((sum+rowCut.length)>=limit){cut=limit-sum;if(row[cut-1]===' '){while(cut){cut-=1;if(row[cut-1]!==' '){break;}}}else{add=row.substring(cut).split('').indexOf(' ');if(!wordBreak){if(add!==-1){cut+=add;}else{cut=row.length;}}}
row=row.substring(0,cut)+suffix;if(moreLink){row+='<a href="'+moreLink+'" style="display:inline">»</a>';}
sum=limit;more=true;}else{sum+=rowCut.length;}}else if(!preserveTags){row='';}else if(sum>=limit){tagMatch=row.match(/[a-zA-Z]+/);tagName=tagMatch?tagMatch[0]:'';if(tagName){if(row.substring(0,2)!=='</'){tagStack.push(tagName);row='';}else{while(tagStack[tagStack.length-1]!==tagName&&tagStack.length){tagStack.pop();}
if(tagStack.length){row='';}
tagStack.pop();}}else{row='';}}
arr[i]=row;}
return{html:arr.join("\n").replace(/\n/g,""),more:more};}