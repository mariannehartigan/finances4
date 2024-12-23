<template>
    <Income :incomes="$page.props.incomes" />
</template>

<script setup>
import Income from './Income.vue'
defineProps({
  incomes: Array,
  futureIncomes: Array,
})
</script>