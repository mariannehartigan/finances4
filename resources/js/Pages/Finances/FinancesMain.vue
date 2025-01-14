<template>
    <Planmain
    :incomes="$page.props.incomes" 
    :futureIncomes="$page.props.futureIncomes" 
    :fixedExpenses="$page.props.fixedExpenses" 
    :futureFixedExpenses="$page.props.futureFixedExpenses"
    :variableExpenses="$page.props.variableExpenses" 
    :isAdmin="$page.props.isAdmin" 
    :userId="$page.props.userId"
    />
</template>

<script setup>
import Planmain from './Plan/PlanMain.vue'
defineProps({
  incomes: Object,
  futureIncomes: Array,
  fixedExpenses: Object,
  futureFixedExpenses: Array,
  variableExpenses: Object,
  isAdmin: Number,
  /*remove this one later, just for testing*/
  userId: Number,
})
</script>