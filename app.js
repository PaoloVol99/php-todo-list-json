const { createApp } = Vue

  createApp({
    data() {
      return {
        title: 'ToDoList',
        todolist: [],
      }
    },
    methods: {
        fetchData() {
            axios
            .get('./server.php')
            .then((res) => {
                this.todolist = res.data
                console.log(this.todolist)
            })
        }
    },
    mounted() {
        this.fetchData()
    }
  }).mount('#app')