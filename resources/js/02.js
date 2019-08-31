var app = new Vue({
    el: '#app',
    data: {
      a: false,
      b: false,
      c: false,
    },
    methods: {
      changeItem: function changeItem(event) {
          
          if(event.target.value==2){
              this.a = true;
              this.b = true;
              this.c = false;
          }else if(event.target.value==3) {
              this.a = true;
              this.b = false;
              this.c = true;
          }else {
              this.a = false;
              this.b = false;
              this.c = false;
          }
          
      }
    }
  });