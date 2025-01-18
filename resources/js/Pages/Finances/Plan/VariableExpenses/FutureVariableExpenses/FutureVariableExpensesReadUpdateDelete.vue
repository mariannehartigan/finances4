<template>
  <div v-if="variableExpenseId===futureVariableExpense.variable_expense_id">
    <form @input="update">
      <input v-model="form.amount" type="text" :readonly="isAdmin === 0"/>
      <input v-model="form.effective_date" type="text" :readonly="isAdmin === 0"/>

    <div style="display: inline-block" v-show="isAdmin">
    <Link :href="`/futureVariableExpenses/${props.futureVariableExpense.id}`" method="DELETE" as="button" preserve-scroll>&nbsp-</Link>
    </div>
  </form>
  </div>
</template>

<script setup>
  import { useForm } from '@inertiajs/vue3'
  import { Link } from '@inertiajs/vue3'
  const props = defineProps({
    futureVariableExpense: Object,
    variableExpenseId: Number,
    isAdmin: Number,
  })
  const form = useForm({
    amount: props.futureVariableExpense.amount,
    effective_date: props.futureVariableExpense.effective_date,
  })
  const update = () => {
    if(props.isAdmin) {
      form.put(`/futureVariableExpenses/${props.futureVariableExpense.id}`, {preserveScroll:true})
    }
  }
</script>