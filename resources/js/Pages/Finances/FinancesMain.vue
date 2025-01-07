<template>
    <Planmain
    :incomes="$page.props.incomes" 
    :futureIncomes="$page.props.futureIncomes" 
    :isAdmin="$page.props.isAdmin"
    />
</template>

<script setup>
import Planmain from './Plan/PlanMain.vue'
defineProps({
  incomes: Object,
  futureIncomes: Array,
  isAdmin: Number,
})
</script>