document.querySelectorAll(".table-sortable th").forEach((headerCell) => {
  headerCell.addEventListener("click", () => {
    const tableElement = headerCell.parentElement.parentElement.parentElement;
    const headerIndex = Array.prototype.indexOf.call(
      headerCell.parentElement.children,
      headerCell
    );
    const currentIsAscending = headerCell.classList.contains("th-sort-asc");

    sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
  });
});

/**
 *
 * @param {HTMLTableElement} table
 * @param {number} column
 * @param {boolean} asc
 */

function sortTableByColumn(table, column, asc = true) {
  const dirModifier = asc ? 1 : -1;
  const tBody = table.tBodies[0];
  const rows = Array.from(tBody.querySelectorAll("tr"));

  //sort each row

  const sortedRows = rows.sort((a, b) => {
    //console.log(a);
    //console.log(b);
    const aColText = a
      .querySelector(`span:nth-child(${column + 1})`)
      .textContent.normalize("NFD")
      .replace(/[\u0300-\u036f]/g, "")
      .trim();
    const bColText = b
      .querySelector(`span:nth-child(${column + 1})`)
      .textContent.normalize("NFD")
      .replace(/[\u0300-\u036f]/g, "")
      .trim();
    // console.log(aColText);
    // console.log(bColText);
    return aColText > bColText ? 1 * dirModifier : -1 * dirModifier;
  });

  console.log(sortedRows);

  //remove data from table
  while (tBody.firstChild) {
    tBody.removeChild(tBody.firstChild);
  }

  //re-add sorted rows

  tBody.append(...sortedRows);

  //remember how the column is currently sorted

  table
    .querySelectorAll("th")
    .forEach((th) => th.classList.remove("th-sort-asc", "th-sort-desc"));
  table
    .querySelector(`th:nth-child(${column + 1})`)
    .classList.toggle("th-sort-asc", asc);
  table
    .querySelector(`th:nth-child(${column + 1})`)
    .classList.toggle("th-sort-desc", !asc);
}
