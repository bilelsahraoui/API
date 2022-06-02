<script>
import axios from 'axios';

export default{
  data(){
    return{
      users: {}
    }
  },
  setup(){
    return{

    }
  },
  mounted(){
    axios.get('http://127.0.0.1:8000/api/users')
      .then(response => response.data)
      .then(data => {
        console.log(data);
        this.users = data;
      })
  },
}

</script>

<template>
  <div>
    Hello
  </div>
</template>