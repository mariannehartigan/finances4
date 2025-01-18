<template>
  <div style="text-align: center;">FIXED EXPENSES</div>
  <div style="border: 4px solid red; text-align: center;">

  <FixedExpensesReadUpdateDelete 
    v-for="fixedExpense in fixedExpenses" 
    :key="fixedExpense.id" 
    :fixedExpense="fixedExpense" 
    :futureFixedExpenses="$page.props.futureFixedExpenses"
    :isAdmin="$page.props.isAdmin" 
    :userId="$page.props.userId" 
  />
  <br /> 
  <FixedExpenseCreate 
    :fixedExpenses="$page.props.fixedExpenses" 
    :isAdmin="$page.props.isAdmin" 
    :userId="$page.props.userId"/>
  </div>
  </template>
  
  <script setup>
  import FixedExpenseCreate from './FixedExpenseCreate.vue';
  import FixedExpensesReadUpdateDelete from './FixedExpensesReadUpdateDelete.vue';
  defineProps({
    fixedExpenses: Object,
    futureFixedExpenses: Array,
    isAdmin: Number,
    userId: Number,
  })
  </script>
