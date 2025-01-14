<template>
    <div style="text-align: center;">VARIABLE EXPENSES</div>
    <div style="border: 4px solid purple; text-align: center;">
<VariableExpensesReadUpdateDelete v-for="variableExpense in variableExpenses" :key="variableExpense.id" :variableExpense="variableExpense" :isAdmin="$page.props.isAdmin" />

<VariableExpenseCreate :variableExpenses="$page.props.variableExpenses" :isAdmin="$page.props.isAdmin"/>
</div>
</template>

<script setup>
import VariableExpenseCreate from './VariableExpenseCreate.vue';
import VariableExpensesReadUpdateDelete from './VariableExpensesReadUpdateDelete.vue';
defineProps({
variableExpenses: Object,
isAdmin: Number,
})
</script>