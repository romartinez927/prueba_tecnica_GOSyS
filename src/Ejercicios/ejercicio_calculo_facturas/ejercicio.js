let invoices = [
    {
        customer: {
            name: "Coca Cola",
            type: "B2B"
        },
        paid: false,
        items: [
            { subtotal: 1234.44, description: 'asdfg' },
            { subtotal: 5678.88, description: 'qwerty' }
        ]
    },
    {
        customer: {
            name: "Juan Perez",
            type: "B2C"
        },
        paid: false,
        items: [
            { subtotal: 5556.54, description: 'asdfg' },
            { subtotal: 9632.21, description: 'qwerty' }
        ]
    },
    {
        customer: {
            name: "John Smith",
            type: "B2C"
        },
        paid: true,
        items: [
            { subtotal: 1234.44, description: 'asdfg' },
            { subtotal: 5678.88, description: 'qwerty' }
        ]
    },
    {
        customer: {
            name: "Esteban Quito",
            type: "B2C"
        },
        paid: false,
        items: [
            { subtotal: 895.7, description: 'asdfg' },
            { subtotal: 8542.34, description: 'qwerty' },
            { subtotal: 9674.95, description: 'qwerty' }
        ]
    }
];

function calcularTotalPorCliente(clientes) {
    const response = clientes
        .filter((cliente) => !cliente.paid)
        .map((cliente) => {
            let subtotales = cliente.items.reduce(calcularTotal, 0)
            return { type: cliente.customer.type, total: subtotales }
        })
        .reduce((acc, cliente) => {
            if (!acc[cliente.type]) {
                acc[cliente.type] = 0;
            }
            acc[cliente.type] += cliente.total;
            return acc;
        }, {});

    return response;
}

function calcularTotal(total, num) {
    return total + num.subtotal;
}

let response = calcularTotalPorCliente(invoices)
console.log(response)
