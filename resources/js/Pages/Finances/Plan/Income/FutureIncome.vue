<template>
    <form v-if="incomeId===futureIncome.income_id">
        <input v-model="form.amount" type="text" />
        <input v-model="form.effective_date" type="text" />
        <input v-model="form.notes" type="text" />
    </form>
</template>

<script setup>
 import { useForm } from '@inertiajs/vue3'
  const props = defineProps({
    futureIncome: Object,
    incomeId: Number,
  })
  const form = useForm({
    effective_date: props.futureIncome.effective_date,
    amount: props.futureIncome.amount,
    income_id: props.futureIncome.income_id,
    notes: props.futureIncome.notes,
  })
</script>