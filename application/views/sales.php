<form>
    <body class="SalesBody">
        <h1>Item List</h2>
        <p>Input the amount of items</p> 
        {sales}        
        {supplies}
        <div class="list-group" id="buttongroup">
            <ul>
                <div class="col-xs-4 title">
                    <a href="{link}">{supply}</a>
                    <input class="form-control" id="focusedInput" type="text" placeholder="Click to set" autocomplete="off">
                </div>
                    <input type="text" class="col-xs-2 price" value="${price}" onfocus="this.blur()"></input>
                    <input type="text" class="col-xs-8 desc" value="{description}" onfocus="this.blur()"></input>
                <br/><br/><br/><br/>
            </ul>
        </div>
         {/supplies}
         {/sales}
         <button type="submit" class="btn btn-default">Submit</button>
    </body>
</form>
