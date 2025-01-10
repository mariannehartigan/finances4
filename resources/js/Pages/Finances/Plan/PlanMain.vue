<template>
    <IncomeMain :incomes="$page.props.incomes" :futureIncomes="$page.props.futureIncomes"
    :isAdmin="$page.props.isAdmin"
    :userId="$page.props.userId"/>
</template>

<script setup>
import IncomeMain from './Income/IncomeMain.vue'
defineProps({
  incomes: Object,
  futureIncomes: Array,
  isAdmin: Number,
  userId: Number,
})
</script>