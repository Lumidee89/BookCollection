<template>
  <div>
    <h2>{{ book.title }}</h2>
    <p><strong>Author:</strong> {{ book.author }}</p>
    <p><strong>Description:</strong> {{ book.description }}</p>
    <p><strong>Published Year:</strong> {{ book.published_year }}</p>
    <p><strong>Status:</strong> {{ book.status }}</p>
  </div>
</template>

<script>
export default {
  props: ['book']
}
</script>