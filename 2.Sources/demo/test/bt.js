var hienanh = document.getElementById('hienanh');
var fruit = document.getElementById('fruit');
var nutnhan = document.getElementById('nutnhan');

nutnhan.addEventListener('click',hamgido,false)

function hamgido() {
    var fruitlist = ['banana','strawberry'];
    if(fruit.value=='') {
        alert('ban chua nhap gi ca');
    }
    else{
        for(var i=0; i<2; i++){
            if(fruit.value==fruitlist[i]){
                hienanh.innerHTML='<img src="'+'images/'+fruit.value+'.jesi'/>'
            }
        }
    }
}


