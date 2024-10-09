<template>
  <div>
    <h2>Add New Book</h2>
    <form @submit.prevent="submitForm">
      <input type="text" v-model="form.title" placeholder="Title" required><br>
      <input type="text" v-model="form.author" placeholder="Author" required><br>
      <textarea v-model="form.description" placeholder="Description" required></textarea><br>
      <input type="number" v-model="form.published_year" placeholder="Published Year" required><br>
      <select v-model="form.status" required>
        <option value="available">Available</option>
        <option value="borrowed">Borrowed</option>
        <option value="reserved">Reserved</option>
      </select><br>
      <button type="submit">Add Book</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        title: '',
        author: '',
        description: '',
        published_year: '',
        status: 'available',
      },
    };
  },
  methods: {
    submitForm() {
      this.$inertia.post('/books', this.form);
    },
  },
};
</script>