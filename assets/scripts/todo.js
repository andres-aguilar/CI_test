new Vue({
  el: '#taskApp',
  data: {
    nameApp: 'TODO App',
    tasks: [
      {title: 'Default task 1', comment: 'comment1', done: false}
    ]
  },
  methods: {
    deleteTask: function(task) {
      this.tasks.splice(this.tasks.indexOf(task), 1);
    },
    addTask: function(e) {
      e.preventDefault();
      if (this.tasks.title != undefined && this.tasks.title != '') {
        this.tasks.push({
          title: this.tasks.title,
          comment: this.tasks.comment,
          done: false
        });
        this.tasks.title = '';
        this.tasks.comment = '';
      }
    },
    updateTask: function(task) {
      let current_task = this.tasks[this.tasks.indexOf(task)];
      this.tasks.title = current_task.title;
      this.tasks.comment = current_task.comment;

      this.deleteTask(task);  // Delete task from list
    }
  }
});
