<template>
    <ActualMain
      :actualIncomes="$page.props.actualIncomes"
      :actualFixedExpenses="$page.props.actualFixedExpenses"
      :actualVariableExpenses="$page.props.actualVariableExpenses" />
    <PlanMain
    :incomes="$page.props.incomes" 
    :futureIncomes="$page.props.futureIncomes" 
    :fixedExpenses="$page.props.fixedExpenses" 
    :futureFixedExpenses="$page.props.futureFixedExpenses"
    :variableExpenses="$page.props.variableExpenses" 
    :futureVariableExpenses="$page.props.futureVariableExpenses"
    :isAdmin="$page.props.isAdmin" 
    :userId="$page.props.userId"
    />
</template>

<script setup>
import PlanMain from './Plan/PlanMain.vue'
import ActualMain from './Actual/ActualMain.vue'
defineProps({
  incomes: Object,
  futureIncomes: Array,  
  actualIncomes: Array,
  fixedExpenses: Object,
  futureFixedExpenses: Array,
  actualFixedExpenses: Array,
  variableExpenses: Object,
  futureVariableExpenses: Array,
  actualVariableExpenses: Array,
  isAdmin: Number,
  userId: Number,
})
</script>