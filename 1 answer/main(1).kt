
//1. Инкапсуляция  механизм, который позволяет скрывать детали реализации объекта, предоставляя доступ к определенным методам объекта. Это необходимо для защиты данных от неверного использования.

//Kotlin // на нем последний год пишу, обучаюсь в свободное время
class BankAccount(private var balance: Double = 0.0) { // Закрытое свойство

    fun deposit(amount: Double) {
        if (amount > 0) {
            balance += amount
        }
    }

    fun withdraw(amount: Double) {
        if (amount > 0 && amount <= balance) {
            balance -= amount
        }
    }

    fun getBalance(): Double {
        return balance // Метод для получения значения закрытого свойства
    }
}

fun main() {
    val account = BankAccount()
    account.deposit(100.0)
    println(account.getBalance()) // Вывод: 100.0
    account.withdraw(50.0)
    println(account.getBalance()) // Вывод: 50.0
}

