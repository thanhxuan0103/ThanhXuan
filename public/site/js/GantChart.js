
    window.onload = function() {
    const ganttChart = document.querySelector('smart-gantt-chart');

    ganttChart.dataSource = [
                {
                   type: 'task',
                   label: 'Task A',
                   dateStart: '2020-1-1',
                   dateEnd: '2020-3-1',
                   progress: 5
                },
                {
                    type: 'task',
                    label: 'Task B',
                    dateStart: '2020-2-1',
                    dateEnd: '2020-3-1',
                    progress: 6
                 },
                 {
                    type: 'task',
                    label: 'Task C',
                    dateStart: '2020-2-1',
                    dateEnd: '2020-4-2',
                    progress: 7
                 },
                 {
                    type: 'task',
                    label: 'Task D',
                    dateStart: '2020-1-1',
                    dateEnd: '2020-7-3',
                    progress: 8
                 },
            ]
    }
