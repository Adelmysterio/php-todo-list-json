const { createApp } = Vue

createApp({
  data() {
    return {
      todoList: '',
      content: 'madonna',
    }
  },
  methods: {
    getData() {
      axios.get('./db/todoList.json', {
      })
        .then((response) => {
          console.log(response.data);
          this.todoList = response.data
          console.log(this.todoList)
        })
        .catch(function (error) {
          console.log(error);
        })
        .finally(function () {
          // always executed
        });
    },
  },

  created() {
    this.getData()
  }
}).mount('#app')
