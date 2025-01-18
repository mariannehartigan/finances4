<template>
    <div v-if="fixedExpenseId===futureFixedExpense.fixed_expense_id">
      <form @input="update">
        <input v-model="form.amount" type="text" :readonly="isAdmin === 0"/>
        <input v-model="form.effective_date" type="text" :readonly="isAdmin === 0"/>
        <input v-model="form.notes" type="text" :readonly="isAdmin === 0"/>

      <div style="display: inline-block" v-show="isAdmin">
      <Link :href="`/futureFixedExpenses/${props.futureFixedExpense.id}`" method="DELETE" as="button" preserve-scroll>&nbsp-</Link>
      </div>
    </form>
    </div>
  </template>
  
  <script setup>
    import { useForm } from '@inertiajs/vue3'
    import { Link } from '@inertiajs/vue3'
    const props = defineProps({
      futureFixedExpense: Object,
      fixedExpenseId: Number,
      isAdmin: Number,
    })
    const form = useForm({
      amount: props.futureFixedExpense.amount,
      effective_date: props.futureFixedExpense.effective_date,
      notes: props.futureFixedExpense.notes,
    })
    const update = () => {
      if(props.isAdmin) {
        form.put(`/futureFixedExpenses/${props.futureFixedExpense.id}`, {preserveScroll:true})
      }
    }
  </script>