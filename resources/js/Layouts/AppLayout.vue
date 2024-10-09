<template>
  <div>
    <header>
      <h1>My Book Collection App</h1>
    </header>

    <main>
      <inertia-link href="/books">Books</inertia-link>
      <inertia-link href="/about">About</inertia-link>
      
      <inertia-view />
    </main>

    <footer>
      <p>&copy; 2022 My Book Collection</p>
    </footer>
  </div>
</template>

<script>
import { InertiaLink, InertiaView } from '@inertiajs/inertia-vue';

export default {
  components: {
    InertiaLink,
    InertiaView,
  },
};
</script>