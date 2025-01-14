<template>
  <div style="text-align: center;">INCOME</div>
  <div style="border: 4px solid blue; text-align: center;">
  <IncomeReadUpdateDelete 
    v-for="income in incomes" 
    :key="income.id" 
    :income="income" 
    :futureIncomes="$page.props.futureIncomes" 
    :isAdmin="$page.props.isAdmin"
    :userId="$page.props.userId"
  />

  <br />

  <IncomeCreate :incomes="$page.props.incomes" :isAdmin="$page.props.isAdmin" :userId="$page.props.userId"/>
  </div>
</template>

<script setup>
import IncomeCreate from './IncomeCreate.vue';
import IncomeReadUpdateDelete from './IncomeReadUpdateDelete.vue';
defineProps({
  incomes: Object,
  futureIncomes: Array,
  isAdmin: Number,
  userId: Number,
})
</script>
