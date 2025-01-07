<template>
    <Income :incomes="$page.props.incomes" :futureIncomes="$page.props.futureIncomes"
    :isAdmin="$page.props.isAdmin"/>
</template>

<script setup>
import Income from './Income/Income.vue'
defineProps({
  incomes: Object,
  futureIncomes: Array,
  isAdmin: Number,
})
</script>