<template>
    <Plan
    :incomes="$page.props.incomes" 
    :futureIncomes="$page.props.futureIncomes" 
    />

</template>

<script setup>
import Plan from './Plan/PlanMain.vue'
defineProps({
  incomes: Array,
  futureIncomes: Array,
})
</script>