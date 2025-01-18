<template>
    <div style="text-align: center;">VARIABLE EXPENSES</div>
    <div style="border: 4px solid purple; text-align: center;">

        <VariableExpensesReadUpdateDelete 
            v-for="variableExpense in variableExpenses" 
            :key="variableExpense.id" 
            :variableExpense="variableExpense" 
            :futureVariableExpenses="$page.props.futureVariableExpenses"
            :isAdmin="$page.props.isAdmin"
            :userId="$page.props.userId" 
        />

        <VariableExpenseCreate 
            :variableExpenses="$page.props.variableExpenses" 
            :isAdmin="$page.props.isAdmin" 
            :userId="$page.props.userId" />
    </div>
</template>

<script setup>
import VariableExpenseCreate from './VariableExpenseCreate.vue';
import VariableExpensesReadUpdateDelete from './VariableExpensesReadUpdateDelete.vue';
defineProps({
    variableExpenses: Object,
    futureVariableExpenses: Array,
    isAdmin: Number,
    userId: Number,
})
</script>