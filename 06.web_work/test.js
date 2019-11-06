
var now = new Date().getTime();

do{
    var end = new Date().getTime();
}while(end - now < 3000);



onmessage = function(e){
    // document.body.innerHTML = e.data;
    console.log(e.data);
}