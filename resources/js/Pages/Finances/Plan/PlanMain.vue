<template>
    <IncomeMain 
      :incomes="$page.props.incomes" 
      :futureIncomes="$page.props.futureIncomes"
      :isAdmin="$page.props.isAdmin"
      :userId="$page.props.userId"/>
    <FixedExpensesMain 
      :fixedExpenses="$page.props.fixedExpenses"  
      :futureFixedExpenses="$page.props.futureFixedExpenses" 
      :isAdmin="$page.props.isAdmin" 
      :userId="$page.props.userId"/>
    <VariableExpensesMain 
      :variableExpenses="$page.props.variableExpenses" 
      :futureVariableExpenses="$page.props.futureVariableExpenses" 
      :isAdmin="$page.props.isAdmin"
      :userId="$page.props.userId" />

</template>

<script setup>
import IncomeMain from './Income/IncomeMain.vue'
import FixedExpensesMain from './FixedExpenses/FixedExpensesMain.vue'
import VariableExpensesMain from './VariableExpenses/VariableExpensesMain.vue'
defineProps({
  incomes: Object,
  futureIncomes: Array,
  fixedExpenses: Object,
  futureFixedExpenses: Array,
  variableExpenses: Object,
  futureVariableExpenses: Array,
  isAdmin: Number,
  userId: Number,
})
</script>