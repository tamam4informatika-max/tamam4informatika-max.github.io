<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>UrbanStyle Admin Dashboard</title>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
body{
    margin:0;
    font-family:Arial, Helvetica, sans-serif;
    background:#111;
    color:#fff;
}

header{
    background:#000;
    padding:20px 40px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    border-bottom:1px solid #222;
}

header h1{
    margin:0;
    font-size:22px;
}

header span{
    color:#facc15;
}

main{
    padding:40px;
}

.stats{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(220px,1fr));
    gap:20px;
    margin-bottom:40px;
}

.stat-card{
    background:#1a1a1a;
    padding:25px;
    border-radius:16px;
    box-shadow:0 10px 25px rgba(0,0,0,.4);
}

.stat-card h3{
    margin:0 0 10px;
    font-size:14px;
    color:#aaa;
}

.stat-card p{
    margin:0;
    font-size:22px;
    font-weight:bold;
    color:#facc15;
}

.order-card{
    background:#1a1a1a;
    padding:25px;
    border-radius:16px;
    margin-bottom:25px;
    box-shadow:0 10px 25px rgba(0,0,0,.4);
}

.order-header{
    display:flex;
    justify-content:space-between;
    margin-bottom:15px;
}

.order-id{
    font-weight:bold;
}

.status{
    background:#facc15;
    color:#111;
    padding:4px 12px;
    border-radius:20px;
    font-size:12px;
    font-weight:bold;
}

.customer{
    font-size:14px;
    color:#bbb;
    margin-bottom:12px;
}

.item{
    display:flex;
    justify-content:space-between;
    padding:6px 0;
    border-bottom:1px solid #333;
    font-size:14px;
}

.total{
    margin-top:10px;
    font-weight:bold;
    color:#facc15;
}

.delete-btn{
    margin-top:15px;
    background:#dc2626;
    border:none;
    color:#fff;
    padding:8px 14px;
    border-radius:6px;
    cursor:pointer;
}

.empty{
    text-align:center;
    padding:80px;
    color:#777;
}
</style>
</head>

<body>

<header>
    <h1>Urban<span>Style</span> Admin</h1>
    <div>Dashboard Panel</div>
</header>

<main>

<div class="stats">
    <div class="stat-card">
        <h3>Total Orders</h3>
        <p id="totalOrders">0</p>
    </div>
    <div class="stat-card">
        <h3>Total Revenue</h3>
        <p id="totalRevenue">Rp 0</p>
    </div>
    <div class="stat-card">
        <h3>Total Items Sold</h3>
        <p id="totalItems">0</p>
    </div>
</div>

<div class="order-card">
    <h2>Revenue Overview</h2>
    <canvas id="revenueChart" height="100"></canvas>
</div>

<div id="orderList"></div>

</main>

<script>
function getOrders(){
    return JSON.parse(localStorage.getItem("orders")) || [];
}

function saveOrders(orders){
    localStorage.setItem("orders", JSON.stringify(orders));
}

let orders = getOrders();

function renderDashboard(){

    const container = document.getElementById("orderList");
    container.innerHTML = "";

    let totalRevenue = 0;
    let totalItems = 0;

    if(orders.length === 0){
        container.innerHTML = "<div class='empty'>No orders available.</div>";
        updateStats(0,0,0);
        renderChart();
        return;
    }

    orders.forEach((order,index)=>{

        totalRevenue += order.total;

        let itemsHTML = "";

        order.items.forEach(item=>{
            totalItems += item.qty;
            itemsHTML += `
                <div class="item">
                    <span>${item.name} (x${item.qty})</span>
                    <span>Rp ${(item.price * item.qty).toLocaleString()}</span>
                </div>
            `;
        });

        container.innerHTML += `
            <div class="order-card">
                <div class="order-header">
                    <div class="order-id">${order.order_id}</div>
                    <div class="status">Completed</div>
                </div>
                <div class="customer">
                    ${order.customer.name}<br>
                    ${order.customer.phone}<br>
                    ${order.customer.address}
                </div>
                ${itemsHTML}
                <div class="total">
                    Total: Rp ${order.total.toLocaleString()}
                </div>
                <button class="delete-btn" onclick="deleteOrder(${index})">
                    Delete Order
                </button>
            </div>
        `;
    });

    updateStats(orders.length, totalRevenue, totalItems);
    renderChart();
}

function updateStats(orderCount, revenue, items){
    document.getElementById("totalOrders").innerText = orderCount;
    document.getElementById("totalRevenue").innerText = 
        "Rp " + revenue.toLocaleString();
    document.getElementById("totalItems").innerText = items;
}

function deleteOrder(index){
    if(confirm("Delete this order?")){
        orders.splice(index,1);
        saveOrders(orders);
        renderDashboard();
    }
}

function renderChart(){

    const ctx = document.getElementById('revenueChart');

    if(!ctx) return;

    const labels = orders.map(order => order.order_id);
    const revenues = orders.map(order => order.total);

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Revenue (Rp)',
                data: revenues,
                backgroundColor: '#facc15'
            }]
        },
        options: {
            responsive:true,
            scales:{
                x:{ ticks:{ color:"#aaa" }, grid:{ color:"#333" }},
                y:{ ticks:{ color:"#aaa" }, grid:{ color:"#333" }}
            }
        }
    });
}

renderDashboard();
</script>

</body>
</html>