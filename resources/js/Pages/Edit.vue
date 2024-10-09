<template>
  <div>
    <h2>Edit Book</h2>
    <form @submit.prevent="submitForm">
      <input type="text" v-model="form.title" required><br>
      <input type="text" v-model="form.author" required><br>
      <textarea v-model="form.description" required></textarea><br>
      <input type="number" v-model="form.published_year" required><br>
      <select v-model="form.status" required>
        <option value="available">Available</option>
        <option value="borrowed">Borrowed</option>
        <option value="reserved">Reserved</option>
      </select><br>
      <button type="submit">Update Book</button>
    </form>
  </div>
</template>

<script>
export default {
  props: ['book'],
  data() {
    return {
      form: {
        title: this.book.title || '',
        author: this.book.author || '',
        description: this.book.description || '',
        published_year: this.book.published_year || '',
        status: this.book.status || 'available',
      },
    };
  },
  methods: {
    submitForm() {
      this.$inertia.put(`/books/${this.book.id}`, this.form);
    },
  },
};
</script>