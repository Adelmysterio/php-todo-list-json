const { createApp } = Vue

createApp({
  data() {
    return {
      todoList: '',
      content: '',
    }
  },
  methods: {
    getData() {
      axios.get('./db/todoList.json')
        .then((response) => {
          console.log(response.data);
          this.todoList = response.data
          console.log(this.todoList)
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },

  created() {
    this.getData()
  }
}).mount('#app')