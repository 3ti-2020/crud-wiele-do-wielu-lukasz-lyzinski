const follow={
    numer: document.getElementById("numer"),
    numer1: document.getElementById("numer1"),
    numer2: document.getElementById("numer2"),
    przy: document.getElementById("przy"),
    przy1: document.getElementById("przy1"),
    przy2: document.getElementById("przy2"),
    przy3: document.getElementById("przy3"),
    przy4: document.getElementById("przy4"),
    przy5: document.getElementById("przy5"),

    btn1:function(){
        this.numer.innerHTML=parseInt(this.numer.innerHTML)+1;
    },

    
    btn2:function(){
        if (this.numer.innerHTML > 0) this.numer.innerHTML=parseInt(this.numer.innerHTML)-1;
    },

    
    btn3:function(){
        this.numer1.innerHTML=parseInt(this.numer1.innerHTML)+1;
    },
    btn4:function(){
        this.numer1.innerHTML=parseInt(this.numer1.innerHTML)-1;
    },

    btn5:function(){
        this.numer2.innerHTML=parseInt(this.numer2.innerHTML)+1;
    },
    btn6:function(){
        this.numer2.innerHTML=parseInt(this.numer2.innerHTML)-1;
    },


    init:function(){
        this.przy.addEventListener('click',this.btn1.bind(follow));
        this.przy1.addEventListener('click',this.btn2.bind(follow));
        this.przy2.addEventListener('click',this.btn3.bind(follow));
        this.przy3.addEventListener('click',this.btn4.bind(follow));
        this.przy4.addEventListener('click',this.btn5.bind(follow));
        this.przy5.addEventListener('click',this.btn6.bind(follow));
    },
}
follow.init();