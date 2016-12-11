<div class="homepageMain">
    <h2> Transaction History </h2>
    {log}
    <div class="pageSummary">
        <p><b>{name}</b>:</p>
        <ul>
            <p>Transaction Type; {type}</p>
            <p>Date of Occurence: {date}</p>
            <p>Total Price: ${totalPrice}</p>
        </ul>
        <div class="logMain">
            <p><u>Items</u>: </p>
            {itemTransactions}
            <ul>
                <li>
                    {itemValue}
                </li>
            </ul>
            {/itemTransactions}
        </div>
        <br>
    </div>
    {/log}
</div>