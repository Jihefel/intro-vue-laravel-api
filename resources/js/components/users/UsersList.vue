<script setup>
import { ref } from 'vue';

const users = ref([]);

const loadFromServer = async () => {
    await axios.get('/api/users')
        .then((response) => {
            users.value = response.data.data;
        })
        .catch((error) => {
            console.log(error);
        })
}

loadFromServer();
</script>


<template>
    <template v-for="user in users">
        <p v-text="user.name" />
    </template>
</template>
