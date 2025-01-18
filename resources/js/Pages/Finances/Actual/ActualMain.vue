<template>
    <div style="text-align: center;">ACTUAL INCOME</div>
    <div style="border: 4px solid pink; text-align: center;">
      <ActualIncome v-for="actualIncome in actualIncomes" 
        :key="actualIncome.id" 
        :actualIncome="actualIncome"
        :isAdmin="$page.props.isAdmin"
        :userId="$page.props.userId"/>
    <div style="text-align: center;">ACTUAL FIXED EXPENSES</div>
      <ActualFixedExpenses v-for="actualFixedExpense in actualFixedExpenses" 
        :key="actualFixedExpense.id" 
        :actualFixedExpense="actualFixedExpense"
        :isAdmin="$page.props.isAdmin"
        :userId="$page.props.userId"/>
    <div style="text-align: center;">ACTUAL VARIABLE EXPENSES</div>
      <ActualVariableExpenses v-for="actualVariableExpense in actualVariableExpenses"
        :key="actualVariableExpense.id" 
        :actualVariableExpense="actualVariableExpense"
        :isAdmin="$page.props.isAdmin"
        :userId="$page.props.userId"/>
    </div>
</template>

<script setup>
import ActualIncome from './ActualIncomes.vue';
import ActualFixedExpenses from './ActualFixedExpenses.vue';
import ActualVariableExpenses from './ActualVariableExpenses.vue';
defineProps({
  actualIncomes: Array,
  actualFixedExpenses: Array,
  actualVariableExpenses: Array,
  isAdmin: Number,
  userId: Number,
})
</script>