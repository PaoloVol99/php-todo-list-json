const { createApp } = Vue

  createApp({
    data() {
      return {
        title: 'ToDoList',
        todolist: [],
        newTodo: '',
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
        },
        saveTodo() {
            console.log(this.newTodo)

            $data = {
				todo: this.newTodo,
			}

            axios
            .post('./server.php', $data, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                },
            })
            .then ((res) => {
                this.todolist = res.data
                this.newTodo = ''
            })
        }
    },
    mounted() {
        this.fetchData()
    }
  }).mount('#app')