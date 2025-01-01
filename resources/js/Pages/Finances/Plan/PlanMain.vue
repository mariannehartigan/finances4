<template>
    <Income :incomes="$page.props.incomes" :futureIncomes="$page.props.futureIncomes"/>
</template>

<script setup>
import Income from './Income/Income.vue'
defineProps({
  incomes: Array,
  futureIncomes: Array,
})
</script>