<template>
    <Planmain
    :incomes="$page.props.incomes" 
    :futureIncomes="$page.props.futureIncomes" 
    />
</template>

<script setup>
import Planmain from './Plan/PlanMain.vue'
defineProps({
  incomes: Array,
  futureIncomes: Array,
})
</script>